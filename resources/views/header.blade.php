<div class="d-none d-md-block" id="contact-nav">
    <ul class="nav d-flex justify-content-center" id="top-nav" style="width: 100%;">
        @include('nav-top')
    </ul>
</div>

<div id="head-section" class="d-none d-md-block">
    <div class="container">
        <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand" href="/"><img src="images/ecpac-logo-circle.png" alt="" id="logo"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-navigation" aria-controls="main-navigation" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse d-flex justify-content-start" id="main-navigation">
                <ul class="navbar-nav" id="nav-dark-txt">
                    @include('nav')
                </ul>
            </div>
        </nav>
