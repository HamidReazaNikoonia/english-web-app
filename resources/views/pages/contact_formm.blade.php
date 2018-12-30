<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title> contact </title>
  </head>
  <body>
      <form action="/contact" method="POST">
        @csrf

        <label for=""> user name</label>
        <input type="text" name="user_name" value="{{ old('user_name') }}">

        <label for="">user_email</label>
        <input type="email" name="user_email" value="{{ old('user_email') }}">

        <label for=""> user mobile</label>
        <input type="mobile" name="user_mobile" value="{{ old('user_mobile') }}">

        <label for=""> send news letter </label>
        <input type="checkbox" name="send_news_letter" value=true >

        <label for="">user message</label>
        <textarea name="user_message" rows="8" cols="80" value="{{  old('user_message') }}" ></textarea>

        <input type="submit" name="submit" value="click">
      </form>
  </body>
</html>
