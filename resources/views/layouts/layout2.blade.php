<!DOCTYPE html>
<html>
    <head>
        @foreach($headSections as $key => $section)
            @include('components.'.$section)
        @endforeach
    </head>
    <body>
        <header>
            <div class="">
                @foreach($headerSections as $key => $section)
                @include('components.'.$section)
                @endforeach
            </div>
        </header>
        <section>
            <div class="">
                <div class="row ">
                    @foreach($leftSections as $key => $section)
                    @include('components.'.$section)
                    @endforeach
                </div>
                <div class="row ">
                    @foreach($rightSections as $key => $section)
                    @include('components.'.$section)
                    @endforeach
                </div>
            </div>
        </section>
        <section>
            <div class=" hidden-xs">
                @foreach($mainSections as $key => $section)
                @include('components.'.$section)
                @endforeach
            </div>
        </section>
        @foreach($bottomSections as $key => $section)
        @include('components.'.$section)
        @endforeach
        <footer>
            <div class="">
                @foreach($footerSections as $key => $section)
                    @include('components.'.$section)
                @endforeach
            </div>
        </footer>
        @foreach($footSections as $key => $section)
            @include('components.'.$section)
        @endforeach
    </body>
</html>
