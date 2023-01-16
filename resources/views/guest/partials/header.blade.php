<header>
    @include('.guest.partials.nav')
    <div class="head"></div>
</header>

<style>
    .head {
        background-size: cover;
        height: 30vh;
        background-image: url({{ asset('images/jumbotron.jpg') }});
    }
</style>
