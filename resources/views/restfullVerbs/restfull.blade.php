<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Document</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css"
          integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
</head>
<body>
<div class="container" style="margin: 2em">
    <h1>Get Restfull Verb</h1>
    <form action="/bar" method="get">
        {{ csrf_field() }}
        <button class="btn btn-default btn-primary" type="submit">get Verb</button>
    </form>
    <h1>Post Restfull Verb</h1>
    <form action="/bar" method="Post">
        {{ csrf_field() }}
        <button class="btn btn-default btn-primary" type="submit">Post Verb</button>
    </form>
    <h1>Put Restfull Verb</h1>
    <form action="/bar" method="Post">
        <input type="hidden" name="_method" value="PUT">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <button class="btn btn-default btn-primary" type="submit">Put Verb</button>
    </form>
    <h1>Patch Restfull Verb</h1>
    <form action="/bar" method="post">
        {{ csrf_field() }}
        {{ method_field('Patch') }}
        <button class="btn btn-default btn-primary" type="submit">Patch Verb</button>
    </form>
    <h1>Delete Restfull Verb</h1>
    <form action="/bar" method="post">
        {{ csrf_field() }}
        {{ method_field('delete') }}
        <button class="btn btn-default btn-primary" type="submit">Delete Verb</button>
    </form>
    <h1>Options Restfull Verb</h1>
    <form action="/bar" method="post">
        {{ csrf_field() }}
        {{ method_field('options') }}
        <button class="btn btn-default btn-primary" type="submit">Options Verb</button>
    </form>
</div>

<!-- jQuery first, then Tether, then Bootstrap JS. -->
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js"
        integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"
        integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"
        integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn"
        crossorigin="anonymous"></script>
<script src="https://unpkg.com/axios@0.12.0/dist/axios.min.js"></script>
<script src="https://unpkg.com/lodash@4.13.1/lodash.min.js"></script>
</body>
</html>
