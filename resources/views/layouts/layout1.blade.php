<!DOCTYPE html>
<html>
    <head>
        <!-- loop for seo -->
        <!-- loop for css -->
        <!-- loop for js -->
    </head>
    <body style="background: red">
        <header>
            <div class="container">
                @foreach($headerSections as $key => $section)
                @include('components.'.$section)
                @endforeach
            </div>
        </header>
        <section>
            <div class="container">
                <div class="row left">
                    @foreach($leftSections as $key => $section)
                    @include('components.'.$section)
                    @endforeach
                </div>
                <div class="row right">
                    @foreach($rightSections as $key => $section)
                    @include('components.'.$section)
                    @endforeach
                </div>
            </div>
        </section>
        <section>
            <div class="container hidden-xs">
                @foreach($mainSections as $key => $section)
                @include('components.'.$section)
                @endforeach
            </div>
        </section>
        @foreach($bottomSections as $key => $section)
        @include('components.'.$section)
        @endforeach
        <footer>
            <div class="container">

            </div>
        </footer>

    </body>
</html>
