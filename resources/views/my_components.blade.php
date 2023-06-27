<!DOCTYPE html>
<html>
<head>
    <title>How to create reusable blade components in Laravel 10 - shouts.dev</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.css" />
</head>
<body>
<div class="container">
    <h3>How to create reusable blade components in Laravel 10 - shouts.dev</h3>

    <!-- For Primary -->
    @component('card')

        @slot('class')
            bg-primary
        @endslot

        @slot('title')
            This is from shouts.dev(Primary)
        @endslot

        My components with primary
    @endcomponent
    <br/>

    <!-- For Danger -->
    @component('card')

        @slot('class')
            bg-danger
        @endslot

        @slot('title')
            This is from shouts.dev(Danger)
        @endslot

        My components with primary
    @endcomponent
    <br/>

    <!-- For Success -->
    @component('card')

        @slot('class')
            bg-success
        @endslot

        @slot('title')
            This is from shouts.dev(Success)
        @endslot

        My components with primary
    @endcomponent
</div>
</body>
</html>
