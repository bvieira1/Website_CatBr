@extends('front.master.master')
@section('content')
<section class="inner-banner">
    <div class="container">
        <ul class="list-unstyled thm-breadcrumb">
            <li><a href="#">Home</a></li>
            <li class="active"><a href="#">{{ $servi->uri }}</a></li>
        </ul><!-- /.list-unstyled -->
        <h2 class="inner-banner__title">{{ $servi->uri }}</h2><!-- /.inner-banner__title -->
    </div><!-- /.container -->
</section><!-- /.inner-banner -->
<section class="cta-three sem_marg">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 clearfix">
                <img src="{{ \Illuminate\Support\Facades\Storage::url(\App\Support\Cropper::thumb($servi->cover, 495, 330)) }}" class="cta-three__image" alt="">
            </div>
            <!-- /.col-lg-6 -->
            <div class="col-lg-6">
                <div class="cta-three__content">
                    <div class="block-title text-left">
                        <h2 class=" title_course">{{ $servi->title }}</h2>
                        <!-- /.block-title__title -->
                    </div>
                    </div>
            </div>
            <!-- /.col-lg-6 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>



<section class="become-teacher">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="become-teacher__content">
                    <h2 class="become-teacher__title">Descrição do serviço.</h2><!-- /.become-teacher__title -->
                    <p class="become-teacher__text">{{ $servi->description }}</p><!-- /.become-teacher__text -->
                </div><!-- /.become-teacher__content -->
            </div><!-- /.col-lg-6 -->
            <div class="col-lg-6">
                <div class="become-teacher__form">
                    <div class="become-teacher__form-top">
                        <h2 class="become-teacher__form-title">
                            Entre em contato
                        </h2><!-- /.become-teacher__form-title -->
                    </div><!-- /.become-teacher__top -->
                    <form action="{{ route('sendEmail') }}" method="post" autocomplete="off" class="become-teacher__form-content">
                        @csrf
                        <div class="form-group">
                            <input type="text" id="name" name="name" class="form-control {{ ($errors->has('name') ? 'is-invalid' : '') }}"  placeholder="Nome Completo"  required>
                            @if($errors->has('name'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('name') }}
                                </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <input type="email" id="email" name="email" class="form-control {{ ($errors->has('email') ? 'is-invalid' : '') }}" placeholder="E-mail"  required>
                            @if($errors->has('email'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('email') }}
                                </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <input type="tel" id="subject" name="subject" class="form-control {{ ($errors->has('subject') ? 'is-invalid' : '') }}" placeholder="Assunto" required >
                            @if($errors->has('subject'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('subject') }}
                                </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <textarea name="message" name="message" class="form-control" id="message" cols="30" rows="3" placeholder="Mensagem" ></textarea>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn contact-one__btn thm-btn">Enviar Mensagem</button>
                        </div>
                        @if(session('mensagem'))
                            <div class="alert alert-success" role="alert">
                                <p>{{session('mensagem')}}</p>
                            </div>
                        @endif
                    </form>
                    <div class="result text-center"></div><!-- /.result -->
                </div><!-- /.become-teacher__form -->
            </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.become-teacher -->











{{-- <section class="course-details">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="course-details__content">
                    <p class="course-details__author">
                    <div class="course-details__top">
                        <div class="course-details__top-left">
                            <!-- /.course-details__title -->
                        </div><!-- /.course-details__top-left -->
                    </div><!-- /.course-details__top -->
                    <div class="course-one__image">
                        <img src="assets/images/course-d-1.jpg" alt="">
                    </div><!-- /.course-one__image -->

                    <ul class="course-details__tab-navs list-unstyled nav nav-tabs" role="tablist">
                        <li>
                            <a class="active" role="tab" data-toggle="tab" href="#overview">Descrição</a>
                        </li>
                        <li>
                            <a class="" role="tab" data-toggle="tab" href="#review">Contato</a>
                        </li>
                    </ul><!-- /.course-details__tab-navs list-unstyled -->
                    <div class="tab-content course-details__tab-content ">
                        <div class="tab-pane show active  animated fadeInUp" role="tabpanel" id="overview">
                            <p>{{ $servi->description }}</p>


                        </div><!-- /.course-details__tab-content -->
                        <div class="tab-pane  animated fadeInUp" role="tabpanel" id="review">

                            <form action="{{ route('sendEmail') }}" method="servi" autocomplete="off" class="course-details__comment-form">
                                @csrf
                                <div class="form-group">
                                    <input type="text" id="name" name="name" class="form-control {{ ($errors->has('name') ? 'is-invalid' : '') }}"  placeholder="Nome Completo"  required>
                                    @if($errors->has('name'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('name') }}
                                        </div>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <input type="email" id="email" name="email" class="form-control {{ ($errors->has('email') ? 'is-invalid' : '') }}" placeholder="E-mail"  required>
                                    @if($errors->has('email'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('email') }}
                                        </div>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <input type="tel" id="subject" name="subject" class="form-control {{ ($errors->has('subject') ? 'is-invalid' : '') }}" placeholder="Assunto" required >
                                    @if($errors->has('subject'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('subject') }}
                                        </div>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <textarea name="message" name="message" class="form-control" id="message" cols="30" rows="10" placeholder="Mensagem" ></textarea>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn contact-one__btn thm-btn">Enviar Mensagem</button>
                                </div>
                                @if(session('mensagem'))
                                    <div class="alert alert-success" role="alert">
                                        <p>{{session('mensagem')}}</p>
                                    </div>
                                @endif
                            </form>
                        </div><!-- /.course-details__tab-content -->
                    </div><!-- /.tab-content -->
{{--                    <div class="col-12">--}}
{{--                        <div class="fb-comments" data-href="{{ Request::url() }}" data-numservis="5" data-width=""></div>--}}
{{--                    </div>--}}
                </div><!-- /.course-details__content -->
            </div><!-- /.col-lg-8 -->
        </div><!-- /.row -->
    </div><!-- /.container -->

</section><!-- /.course-details --> --}}

<section class="cta-one">
    <div class="container">
        <h2 class="cta-one__title">Entre em contato agora mesmo!</h2><!-- /.cta-one__title -->
        <div class="cta-one__btn-block">
            <a href="https://api.whatsapp.com/send?phone=55513058338" target="_blank" class="thm-btn whats"><i class="fab fa-whatsapp"></i> Chama no Whats</a>
        </div><!-- /.cta-one__btn-block -->
    </div><!-- /.container -->
</section><!-- /.cta-one -->
@endsection

