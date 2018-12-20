<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>admin</title>
  </head>
  <body>

    <div class="container">
      <div class="row">
        <div class="col-12">
          <ul>
            <li><a href="./tw"> result - tofel - writing </a></li>
            <li><a href="./ts"> result - tofel - speaking </a></li>
            <li><a href="./iw"> result - ielts - writing </a></li>
            <li><a href="./is"> result - ielts - speaking </a></li>
          </ul>
        </div>
      </div>
    </div>


    @foreach($home_work as $i)

        <li> {{ $i->user_name }} </li>

    @endforeach


  </body>
</html>
