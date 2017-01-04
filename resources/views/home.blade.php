@extends('layouts.app')

@section('content')
    <div class="wrapper">
        <div class="header header-filter" style="background-image: url('http://www.korsvet.com/wp-content/uploads/2016/01/livery-pack-luragung-jaya.png');">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h1 class="title">Telolet Conference</h1>
                        <h4>Konferensi paling keren di dunia yang pernah ada. Eh bukan cuma dunia deng, seluruh alam semesta, bahkan sampai planet namek. Ikutlah bersama kami dan buat dunia berisik. Om telolet, om! </h4>
                        <br />
                        <a href="/daftar" class="btn btn-danger btn-raised btn-lg">
                            DAFTAR
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="main main-raised">
            <div class="container">
                <div class="section text-center section-landing">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <h2 class="title">Telolet Conference</h2>
                            <h5 class="description">Konferensi paling keren di dunia yang pernah ada. Eh bukan cuma dunia deng, seluruh alam semesta, bahkan sampai planet namek. Ikutlah bersama kami dan buat dunia berisik. Om telolet, om! </h5>
                        </div>
                    </div>

                    {{-- <div class="features">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="info">
                                    <div class="icon icon-primary">
                                        <i class="material-icons">chat</i>
                                    </div>
                                    <h4 class="info-title">First Feature</h4>
                                    <p>Divide details about your product or agency work into parts. Write a few lines about each one. A paragraph describing a feature will be enough.</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="info">
                                    <div class="icon icon-success">
                                        <i class="material-icons">verified_user</i>
                                    </div>
                                    <h4 class="info-title">Second Feature</h4>
                                    <p>Divide details about your product or agency work into parts. Write a few lines about each one. A paragraph describing a feature will be enough.</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="info">
                                    <div class="icon icon-danger">
                                        <i class="material-icons">fingerprint</i>
                                    </div>
                                    <h4 class="info-title">Third Feature</h4>
                                    <p>Divide details about your product or agency work into parts. Write a few lines about each one. A paragraph describing a feature will be enough.</p>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>

                <div class="section text-center">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <h2 class="title">Segera Daftar ke telolet conference</h2>
                            <h5 class="description"></h5>
                        </div>
                        <div class="col-md-2 col-md-offset-5">

                            <a href="/daftar" class="btn btn-danger btn-raised btn-lg center-block">DAFTAR</a>

                        </div>
                    </div>
                </div>


                <div class="section text-center">
                    <h2 class="title">Kabar Telolet</h2>

                    <div class="team">
                        <div class="row">
                            @foreach ($beritas->slice(0,6) as $berita)
                                <div class="col-md-4">
                                    <div class="team-player card">
                                        <img src="/material/img/christian.jpg" alt="Thumbnail Image" class="img-raised img-circle">
                                        <h4 class="title"><a href="/lihat-berita/{{ $berita->slug }}">{{ $berita->title }}</a><br /><small>oleh <strong>{{ $berita->user->name }}</strong></small></h4>
                                        <p class="description">{{ str_limit($berita->body, 160) }}</p>
                                        <a href="/lihat-berita/{{ $berita->slug }}">selengkapnya</a>
                                    </div>
                                </div>
                            @endforeach
                            <br><br>
                        </div>
                    </div>

                </div>



                <div class="section landing-section">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <h2 class="text-center title">Buku Tamu</h2>
                            <h4 class="text-center description"></h4>
                            <form class="contact-form" role="form" method="POST" action="{{ url('/') }}">
                                {{ csrf_field() }}
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Name Anda</label>
                                            <input type="text" name="nama" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Email Anda</label>
                                            <input type="email" name="email" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group label-floating">
                                    <label class="control-label">Tulis Pesan</label>
                                    <textarea class="form-control" name="pesan" rows="4"></textarea>
                                </div>

                                <div class="row">
                                    <div class="col-md-4 col-md-offset-4 text-center">
                                        <input type="submit" name="name" value="Kirim Pesan" class="btn btn-primary btn-raised">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>

        </div>

        <footer class="footer">
            <div class="container">
                <nav class="pull-left">
                    <ul>
                        <li>
                            <a href="http://www.creative-tim.com">
                                Creative Tim
                            </a>
                        </li>
                        <li>
                            <a href="http://presentation.creative-tim.com">
                                About Us
                            </a>
                        </li>
                        <li>
                            <a href="http://blog.creative-tim.com">
                                Blog
                            </a>
                        </li>
                        <li>
                            <a href="http://www.creative-tim.com/license">
                                Licenses
                            </a>
                        </li>
                    </ul>
                </nav>
                <div class="copyright pull-right">
                    &copy; 2016, made with <i class="fa fa-heart heart"></i> by Creative Tim
                </div>
            </div>
        </footer>

    </div>
    <script type="text/javascript" async="async" defer="defer" data-cfasync="false" src="https://mylivechat.com/chatinline.aspx?hccid=34334955"></script>

@endsection
