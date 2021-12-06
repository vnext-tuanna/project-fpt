@extends('client.layouts.main')
@push('css')
    <link rel="stylesheet" href="{{asset('client')}}/contact.css" />
@endpush
@section('content')
    <section class="banner">
        <div class="img-banner">
            <img src="../asset/img/contact.jpg" alt="" />
        </div>
    </section>
    <section class="content py-5">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div>
                        <strong class="h6">CHI NHÁNH HÀ NỘI</strong>
                    </div>
                    <div class="py-1">
                        <strong>Gọi cho chúng tôi: +84–246 293 9036</strong>
                        <p>Lịch làm việc từ thứ 2 đến thứ 6</p>
                    </div>
                    <div class="py-1">
                        <strong>Email: recruit@vietis.com.vn</strong>
                        <p>Chúng tôi trả lời tất cả các yêu cầu</p>
                    </div>
                    <div class="pt-1 pb-5">
                        <strong>Địa chỉ: </strong>
                        <span>Tầng 3 & 5, tòa nhà 3A, 82 Duy Tân, Cầu Giấy Hà Nội</span>
                    </div>
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14896.043086360056!2d105.782358!3d21.032255!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x4ae51d7bdee028a1!2zVMOyYSBOaMOgIDNB!5e0!3m2!1sen!2sus!4v1637243880048!5m2!1sen!2sus"
                        width="90%"
                        height="300"
                        style="border: 0"
                        allowfullscreen=""
                        loading="lazy"
                    ></iframe>
                </div>
                <div class="col-sm-6">
                    <div>
                        <strong class="h6">CHI NHÁNH NHẬT BẢN</strong>
                    </div>
                    <div class="py-1">
                        <strong>Gọi cho chúng tôi: 03-6261-5638</strong>
                        <p>Lịch làm việc từ thứ 2 đến thứ 6</p>
                    </div>
                    <div class="py-1">
                        <strong>Email: recruit@vietis.com.vn</strong>
                        <p>Chúng tôi trả lời tất cả các yêu cầu</p>
                    </div>
                    <div class="pt-1 pb-5">
                        <strong>Địa chỉ: </strong>
                        <span>Tokyo, Shinagawa, Nishigotanda, 2−25−1 Intex 2F</span>
                    </div>
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14896.043086360056!2d105.782358!3d21.032255!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x4ae51d7bdee028a1!2zVMOyYSBOaMOgIDNB!5e0!3m2!1sen!2sus!4v1637243880048!5m2!1sen!2sus"
                        width="90%"
                        height="300"
                        style="border: 0"
                        allowfullscreen=""
                        loading="lazy"
                    ></iframe>
                </div>
            </div>
        </div>
    </section>
    <section class="partner py-5">
        <div class="container">
            <div class="h4 text-center py-5">
                <strong>ĐỐI TÁC TIÊU BIỂU</strong>
            </div>
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="../asset/img/backhoa.png" alt="" />
                    </div>
                    <div class="swiper-slide">
                        <img src="../asset/img/donga.jpeg" alt="" />
                    </div>
                    <div class="swiper-slide">
                        <img src="../asset/img/ptit.png" alt="" />
                    </div>
                    <div class="swiper-slide">
                        <img src="../asset/img/Logo_Đại_học_FPT.png" alt="" />
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>
@endsection
