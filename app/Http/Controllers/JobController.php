<?php

namespace App\Http\Controllers;

use App\Mail\ConfirmMail;
use App\Models\CategoryJob;
use App\Models\CV;
use App\Models\Job;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jobs = Job::with('category')->paginate(5);
        return  view('admin.job.index', compact('jobs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = CategoryJob::all();
        return view('admin.job.add', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $request->validate([
            'title'=>'required|min:5|max:100',
            'salary'=>'required|min:5|max:100',
            'amount'=>'required',
            'description'=>'required|min:20|max:5000',
            'experience'=>'required',
            'expired_date'=>'required',
        ]);
        $modal = new Job();
        $modal->fill($request->all())->save();
        return redirect(route('job'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function listJob()
    {
        $jobs = Job::with('category')->paginate(6);
        return  view('client.job.index', compact('jobs'));
    }
    public function show($id)
    {
        $posts = Post::all();
        $jobs = Job::where('id', '!=', $id)->get();
        $job = Job::find($id);
        return view('client.job.detail', compact('job', 'jobs', 'posts'));
    }
    public function sendMail(Request $request)
    {
        $modal = new CV();
        $modal->fill($request->all());
        if ($request->hasFile('cv')){
            $cvName = rand(0, 99) . $request->cv->getClientOriginalName();
            $path = $request->cv->storeAs('public/uploads/cv', $cvName);
            $modal->cv = str_replace('public/', '', $path);
        }
        $modal->save();
        Mail::to($request->email)->send(new ConfirmMail($request->all()));
        return redirect()->back()->with('msg', 'Bạn đã nộp cv thành công. HR của chúng tôi sẽ liên hệ với bạn trong thời gian sớm nhất ');
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = CategoryJob::all();
        $job = Job::find($id);
        return view('admin.job.edit', compact('job', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title'=>'required|min:5|max:100',
            'salary'=>'required|min:5|max:100',
            'amount'=>'required',
            'description'=>'required|min:20|max:5000',
            'experience'=>'required',
            'expired_date'=>'required',
        ]);
        $modal = Job::find($id);
        $modal->fill($request->all())->save();
        return redirect(route('job'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Job::destroy($id);
        return redirect()->route('job');

    }
}
