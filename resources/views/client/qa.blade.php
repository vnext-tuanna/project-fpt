@extends('client.layouts.main')
@push('css')
    <link rel="stylesheet" href="{{asset('client')}}/qa.css" />
@endpush
@section('content')
    <section class="banner">
        <div class="img-banner">
            <img src="../asset/img/q&a.jpg" alt="" />
        </div>
    </section>
    <section class="content py-5">
        <div class="container">
            <div class="accordion" id="accordionExample">
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Chế độ bảo hiểm xã hội như thế nào?
                            </button>
                        </h2>
                    </div>

                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body">
                            <div class="pb-2">
                                VietIS thực hiện đóng bảo hiểm cho nhân viên theo quyết định số 595/QĐ-BHXH ngày 14/04/2017 của Bảo hiểm xã hội Việt Nam bao gồm bảo hiểm y tế, bảo hiểm xã hội và bảo hiểm thất nghiệp.
                            </div>
                            <div>
                                Nhân viên sẽ được công ty đóng bảo hiểm đầy đủ từ khi ký kết Hợp đồng lao động chính thức.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingTwo">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Công ty có các chương trình đào tạo như thế nào?
                            </button>
                        </h2>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                        <div class="card-body">
                            <div pb-2>
                                <strong>Các chương trình đào tạo của VietIS gồm:</strong>
                                <nav>
                                    <ul>
                                        <li>Đào tạo Fresher cho các bạn SV mới ra trường</li>
                                        <li>Đào tạo Quy trình sản xuất phần mềm – Software Process Development cho nhân viên mới gia nhập</li>
                                        <li>Các khóa đào tạo Project Management</li>
                                        <li>Các khóa đào tạo kỹ năng mềm: Horensho, Leadership…</li>
                                        <li>Các khóa đào tạo ngôn ngữ: Tiếng Nhật (N5), tiếng Anh…</li>

                                    </ul>
                                </nav>
                                <p>Ngoài các chương trình đào tạo trên VietIS còn thường xuyên tổ chức các Seminar chia sẻ công nghệ.</p>
                            </div>
                            <div class="pt-2">
                                <strong>Một số chính sách hỗ trợ hoặc phụ cấp chứng chỉ:</strong>
                                <nav>
                                    <ul>
                                        <li>Tại VietIS hiện tại có chính sách hỗ trợ nhân viên học và thi chứng chỉ. Nếu thi đỗ chứng chỉ nhân viên sẽ được hỗ trợ 100% học phí và lệ phí thi, đồng thời được khen thưởng trước toàn công ty và là cơ sở đề xuất tăng lương trong các kỳ Checkpoint.</li>
                                        <li>Với ngôn ngữ tiếng Nhật, VietIS có đưa ra mức trợ cấp như sau: N1 (5M), N2 (3M), N3 (1M). Lưu ý các trợ cấp này không áp dụng với các vị trí BrSE, Sales, Comtor…</li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingThree">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Công ty thanh toán lương cho nhân viên vào thời gian nào?
                            </button>
                        </h2>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                        <div class="card-body">

                            <div class="py-1">VietIS thanh toán lương cho nhân viên vào các ngày 30 hoặc 31 hàng tháng.</div>
                            <div class="py-1">Trong trường hợp các ngày này trùng vào kỳ nghỉ lễ hoặc ngày cuối tuần, nhân viên sẽ được thanh toán lương vào trước kỳ nghỉ lễ hoặc ngày thứ 6 trước kỳ nghỉ cuối tuần.</div>
                            <div class="py-1">VietIS trả lương cho nhân viên qua ngân hàng Tiên Phong Bank (TPBANK). Vì vậy các bạn nhân viên cần lưu ý mở tài khoản khi đã trở thành nhân viên của công ty.</div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="4">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                Mức lương offer của công ty là mức lương Gross hay Net?
                            </button>
                        </h2>
                    </div>
                    <div id="collapse4" class="collapse" aria-labelledby="4" data-parent="#accordionExample">
                        <div class="card-body">
                            Mức lương offer tại VietIS là mức lương Gross, tức là mức lương trước khi khấu trừ thuế thu nhập cá nhân và bảo hiểm.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="5">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                                Chính sách OT tại VIETIS được quy định như thế nào?
                            </button>
                        </h2>
                    </div>
                    <div id="collapse5" class="collapse" aria-labelledby="5" data-parent="#accordionExample">
                        <div class="card-body">
                            <div>
                                VietIS không khuyến khích nhân viên OT.
                            </div>
                            <div class="py-3">
                                <div>Đối với trường hợp nhân viên OT, chính sách như sau:</div>
                                <nav>
                                    <ul>
                                        <li>Được hưởng 01 ngày lương ứng với số ngày OT</li>
                                        <li>Được nghỉ bù tương ứng với số ngày OT</li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="heading6">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
                                Chính sách phụ cấp ngôn ngữ lập trình thứ 2
                            </button>
                        </h2>
                    </div>
                    <div id="collapse6" class="collapse" aria-labelledby="heading6" data-parent="#accordionExample">
                        <div class="card-body">
                            Với mục đích khuyến khích nhân viên phát triển đa dạng về kỹ năng lập trình, sẵn sàng đáp ứng các thay đổi về công nghệ trong môi trường cạnh tranh, VietIS đã đưa ra chính sách phụ cấp hàng tháng cho các bạn Lập trình viên sử dụng thêm ngôn ngữ lập trình thứ 2 trong công việc.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
