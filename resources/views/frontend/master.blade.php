<!DOCTYPE html>
<html lang="en">
    @include('frontend.partials.head')
	<body>
        @include('frontend.partials.header')

        @include('frontend.partials.navbar')

        @yield('content')

        @include('frontend.partials.newsletter')

        @include('frontend.partials.footer')

        @include('frontend.partials.scripts')

	</body>
</html>
