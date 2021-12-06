@extends('client.layouts.main')
@push('css')
    <link rel="stylesheet" href="{{asset('client')}}/choose.css" />
@endpush
@section('content')
<section class="banner">
    <div class="img-banner">
        <img src="../asset/img/banner4.jpg" alt="" />
    </div>
</section>
<section class="content py-5">
    <div class="container">
        <div>
            <strong class="h4">Môi Trường & Các Hoạt Động</strong>
            <p>
                Hiểu được rằng môi trường làm nên con người, chúng tôi luôn chú
                trọng để phát triển môi trường học hỏi và vui chơi tốt nhất cho nhân
                viên:
            </p>
            <nav>
                <ul>
                    <li>
                        Môi trường làm việc trẻ trung, năng động, chuyên nghiệp và nhiều
                        cơ hội thăng tiến: Sức trẻ và nhiệt huyết của VietIS được tạo
                        nên từ chính mỗi cá nhân công ty, chúng tôi luôn không ngừng
                        thay đổi để hoàn thiện hơn nữa bản thân,
                    </li>
                    <li>Du lịch 2 lần /năm : du lịch Hè và du lịch Đông.</li>
                    <li>Happy Hour cả công ty vào chiều thứ 6 hàng tuần</li>
                    <li>Tổ chức sinh nhật tháng cho nhân viên.</li>
                    <li>Xem phim 1 lần/tháng tại CGV IPH</li>
                    <li>
                        Các hoạt động khác do công đoàn tổ chức: Teambuilding ngoài trời
                        định kì, các hoạt động vui chơi giải trí khác
                    </li>
                </ul>
            </nav>
        </div>
        <div class="py-2">
            <strong class="h4">Lương</strong>
            <nav>
                <ul>
                    <li>
                        Mức lương cạnh tranh, tương xứng với khả năng và kinh nghiệm.
                    </li>
                    <li>
                        Thử việc 2 tháng, hưởng 100% lương trong quá trình thử việc.
                    </li>
                    <li>Xét tăng lương 2 lần/năm</li>
                </ul>
            </nav>
        </div>
        <div class="py-2">
            <strong class="h4">Thưởng & Trợ Cấp</strong>
            <p>
                Công ty Cổ phần Phần mềm VietIS (gọi tắt là VietIS Software) được
                thành lập từ năm 2009 và bắt đầu cung cấp dịch vụ phát triển phần
                mềm cho đối tác Nhật Bản từ năm 2013.
            </p>
            <nav>
                <ul>
                    <li>
                        Hằng năm: thưởng lương tháng 13 + Thưởng theo kết quả kinh doanh
                        của công ty (thực hiện review vào cuối mỗi năm)
                    </li>
                    <li>Thưởng dự án</li>
                    <li>Trợ cấp tiếng Nhật: N1 (5M), N2 (3M), N3 (1M)</li>
                    <li>
                        Phụ cấp cho Lập trình viên khi sử dụng ngôn ngữ lập trình thứ 2
                    </li>
                    <li>
                        Phụ cấp làm thêm giờ (VietIS không khuyến khích nhân viên OT)
                    </li>
                    <li>Phụ cấp quản lí dự án (nếu có)</li>
                </ul>
            </nav>
        </div>
        <div class="py-2">
            <strong class="h4"> Bảo Hiểm </strong>
            <p>Đóng đầy đủ BHYT, BHXH, BHTN theo quy định của Nhà Nước</p>
        </div>
    </div>
</section>
@endsection
