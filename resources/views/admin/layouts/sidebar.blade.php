<div class="sidebar">
    <div class="main-menu">
        <div class="scroll">
            <ul class="list-unstyled">
                <li class="active">
                    <a href="{{route('dashboard')}}">
                        <i class="iconsmind-Shop-4"></i>
                        <span>Dashboards</span>
                    </a>
                </li>
                <li>
                    <a href="#layouts">
                        <i class="iconsmind-Digital-Drawing"></i> Job
                    </a>
                </li>
                <li>
                    <a href="#applications">
                        <i class="iconsmind-Newspaper"></i> News
                    </a>
                </li>
                <li>
                    <a href="#ui">
                        <i class="iconsmind-Notepad"></i> CV
                    </a>
                </li>
                <li>
                    <a href="#landingPage">
                        <i class="iconsmind-User"></i> User
                    </a>
                </li>

            </ul>
        </div>
    </div>

    <div class="sub-menu">
        <div class="scroll">
            <ul class="list-unstyled" data-link="layouts">
                <li>
                    <a href="{{route('job.add')}}">
                        <i class="simple-icon-credit-card"></i> Add Job
                    </a>
                </li>
                <li>
                    <a href="{{route('job')}}">
                        <i class="simple-icon-list"></i> List Job
                    </a>
                </li>
                <li>
                    <a href="{{route('category.add')}}">
                        <i class="simple-icon-check"></i> Add Job Category
                    </a>
                </li>
                <li>
                    <a href="{{route('category')}}">
                        <i class="simple-icon-list"></i> List Category
                    </a>
                </li>
            </ul>
            <ul class="list-unstyled" data-link="applications">
                <li>
                    <a href="{{route('news.add')}}">
                        <i class="simple-icon-check"></i> Add News
                    </a>
                </li>
                <li>
                    <a href="{{route('news')}}">
                        <i class="simple-icon-calculator"></i> List News
                    </a>
                </li>
                <li>
                    <a href="{{route('news-category.add')}}">
                        <i class="simple-icon-note"></i> Add News Category
                    </a>
                </li>
                <li>
                    <a href="{{route('news-category')}}">
                        <i class="simple-icon-list"></i> List News Category
                    </a>
                </li>

            </ul>
            <ul class="list-unstyled" data-link="ui">
                <li>
                    <a href="{{route('cv')}}">
                        <i class="simple-icon-bell"></i> CV
                    </a>
                </li>
            </ul>
            <ul class="list-unstyled" data-link="landingPage">
                <li>
                    <a  href="{{route('user.add')}}">
                        <i class="simple-icon-docs"></i> Add user
                    </a>
                </li>
                <li>
                    <a href="{{route('user')}}">
                        <i class="simple-icon-doc"></i> List user
                    </a>
                </li>

            </ul>

        </div>
    </div>
</div>
