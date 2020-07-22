<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/lamountains.css') }}" rel="stylesheet">
    <title>LA Mountains</title>
</head>
<body>
    <div class="container">

        <nav>
            <ul id="nav-tab" class="nav nav-tabs justify-content-end" role="tablist">
                <li class="nav-item mr-auto">
                    <a id="nav-main-tab" class="nav-link active pb-0" data-toggle="tab" href="#nav-main" role="tab" aria-controls="nav-main" aria-selected="true">
                        <img src="{{ asset('images/lamountains_brand.png') }}" style="width: 2em; height: 2em" />
                    </a>
                </li>
                <li class="nav-item">
                    <a id="nav-one-tab" class="nav-link" data-toggle="tab" href="#nav-one" role="tab" aria-controls="nav-one" aria-selected="true">01. HISTORY</a>
                </li>
                <li class="nav-item">
                    <a id="nav-two-tab" class="nav-link" data-toggle="tab" href="#nav-two" role="tab" aria-controls="nav-two" aria-selected="false">02. TEAM</a>
                </li>
            </ul>
        </nav>

        <div id="nav-tab-content" class="tab-content" role="tablist">

            <div id="nav-main" class="card tab-pane fade show active" role="tabpanel" aria-labelledby="nav-one-main">
                <div id="heading-one" class="card-header" role="tab">
                    <h5 class="mb-0">
                        <a data-toggle="collapse" href="#collapse-main" aria-expanded="true" aria-controls="collapse-main">
                            <img src="{{ asset('images/lamountains_brand.png') }}" />
                        </a>
                    </h5>
                </div>
                <div id="collapse-main" class="collapse show" data-parent="#nav-tab-content" role="tabpanel" aria-labelledby="heading-main">
                    <div class="card-body">
                        <h1>LOS ANGELES<br />MOUNTAINS</h1>
                    </div>
                </div>
            </div>

            <div id="nav-one" class="card tab-pane fade show" role="tabpanel" aria-labelledby="nav-one-tab">
                <div id="heading-one" class="card-header" role="tab">
                    <h5 class="mb-0">
                        <a data-toggle="collapse" href="#collapse-one" aria-expanded="true" aria-controls="collapse-one">01. HISTORY</a>
                    </h5>
                </div>
                <div id="collapse-one" class="collapse show" data-parent="#nav-tab-content" role="tabpanel" aria-labelledby="heading-one">
                    <div class="card-body">
                        <h1>01.</h1>
                        <h2>HISTORY</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin in ante viverra, rutrum erat rutrum, consectetur mi. Prion at maximus est. Nullam purus ex, iaculis sed erat sed, blandit tincidunt quam. Cras scelerisque id quam sed digissim Pellentesqu urna nunc, gravida quis henderit ac, tristique ut quam. Vivamus suscipit dignissim tortor nec congue.</p>
                    </div>
                </div>
            </div>

            <div id="nav-two" class="card tab-pane fade" role="tabpanel" aria-labelledby="nav-two-tab">
                <div id="heading-two" class="card-header" role="tab">
                    <h5 class="mb-0">
                        <a data-toggle="collapse" href="#collapse-two" aria-expanded="true" aria-controls="collapse-two">02. TEAM</a>
                    </h5>
                </div>
                <div id="collapse-two" class="collapse show" data-parent="#nav-tab-content" role="tabpanel" aria-labelledby="heading-two">
                    <div class="card-body">
                        <h1>02.</h1>
                        <h2>CLIMB</h2>
                        <p>Cras scelerisque id quam sed dignissim Pellentesque urna nunc, gravida quis hendrerit ac, tristique ut quam. Vivamus suscipit dignissim tortor nec congue.</p>
                    </div>
                </div>
            </div>

        </div>

    </div>
</body>
</html>