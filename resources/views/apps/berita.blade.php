@extends('layouts.app')

@section('content')
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <div id="kt_content_container" class="container">
            <div class="card">
                <div class="card-body p-lg-10">
                    <div class="mb-17">
                        <!--begin::Content-->
                        <div class="d-flex flex-stack mb-3">
                            <!--begin::Title-->
                            <h3 class="text-black">Berita Terbaru</h3>
                            <!--end::Title-->
                            <!--begin::Link-->
                            <a href="#" class="fs-6 fw-bold link-primary">Lihat Semua</a>
                            <!--end::Link-->
                        </div>
                        <!--end::Content-->
                        <!--begin::Separator-->
                        <div class="separator separator-dashed mb-9"></div>
                        <!--end::Separator-->
                        <!--begin::Row-->
                        <div class="row g-10">
                            @forelse ($data_berita as $berita)
                                <!--begin::Col-->
                                <div class="col-md-4">
                                    <!--begin::Feature post-->
                                    <div class="card-xl-stretch me-md-6">
                                        <!--begin::Image-->
                                        <a class="d-block bgi-no-repeat bgi-size-cover bgi-position-center card-rounded position-relative min-h-200px mb-3"
                                            style="background-image:url('{{ $berita->urlToImage }}')"
                                            data-fslightbox="lightbox-video-tutorials" href="{{ $berita->url }}">
                                            <img src="{{ $berita->urlToImage }}"
                                                class="position-absolute img-fluid top-50 start-50 translate-middle"
                                                alt="image" style="height: 100%" />
                                        </a>
                                        <!--end::Image-->
                                        <!--begin::Body-->
                                        <div class="my-10">
                                            <!--begin::Title-->
                                            <a href="{{ $berita->url }}"
                                                class="fs-4 text-dark fw-bolder text-hover-primary text-dark lh-base"
                                                target="_blank">
                                                {{ $berita->title }}
                                            </a>
                                            <!--end::Title-->
                                            <!--begin::Text-->
                                            <div class="fw-bold fs-5 text-gray-600 text-dark my-4">
                                                {{ Str::words($berita->content, 10) }}
                                            </div>
                                            <!--end::Text-->
                                            <!--begin::Content-->
                                            <div class="fs-6 fw-bolder">
                                                <!--begin::Author-->
                                                <a href="#"
                                                    class="text-gray-700 text-hover-primary">{{ $berita->author }}</a>
                                                <!--end::Author-->
                                                <!--begin::Date-->
                                                <span class="text-muted"> -
                                                    {{-- {{ $berita->publishedAt }} --}}
                                                    {{ \Carbon\Carbon::parse($berita->publishedAt)->diffForHumans() }}</span>
                                                <!--end::Date-->
                                            </div>
                                            <!--end::Content-->
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::Feature post-->
                                </div>
                                <!--end::Col-->
                            @empty
                                <h3 class="text-center">Tidak Ada Berita</h3>
                            @endforelse
                        </div>
                        <!--end::Row-->
                    </div>
                    <!--end::Section-->
                </div>
            </div>
        </div>
    </div>

@endsection
