<div class="container">
  <div class="row">
    <div class="col-12">
      <form method="POST" action="/service/i/speaking">
        @csrf
        <fieldset class="form-group">
          <label for="Email">Email address</label>
          <input name="email" type="email" class="form-control" id="Email" placeholder="Enter email">
          <small class="text-muted">We'll never share your email with anyone else.</small>
        </fieldset>
        <fieldset class="form-group">
          <label for="name">name</label>
          <input name="user_name" type="text" class="form-control" id="name" placeholder="name">
        </fieldset>
        <fieldset class="form-group">
          <label for="family">family</label>
          <input name="user_family" type="text" class="form-control" id="family" placeholder="family">
        </fieldset>
        <fieldset class="form-group">
          <label for="mobile">mobile</label>
          <input name="mobile" type="mobile" class="form-control" id="mobile" placeholder="mobile">
        </fieldset>
        <fieldset class="form-group">
          <label for="telegram">telegram id</label>
          <input name="telegram" class="form-control" id="telegram" placeholder="telegram">
        </fieldset>
        <fieldset class="form-group">
          <label for="send_result">send result via</label>
          <select name="send_via" class="form-control" id="send_result">
            <option>mobile</option>
            <option>telegram</option>
            <option>email</option>
          </select>
        </fieldset>

        <fieldset class="form-group">
          <label for="writing_text">writing text</label>
          <textarea value="{{ old('input') }}" name="input" class="form-control" id="exampleTextarea" rows="3"></textarea>
        </fieldset>

        <fieldset class="form-group">
          <label for="details">writing details</label>
          <textarea value="{{ old('details') }}" name="details" class="form-control" id="details" rows="3"></textarea>
        </fieldset>

        <fieldset class="form-group">
          <label for="exampleInputFile">File input</label>
          <input type="file" class="form-control-file" id="exampleInputFile">
          <small class="text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>
        </fieldset>
        <div class="radio">
          <label>
            <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
            Option one is this and that&mdash;be sure to include why it's great
          </label>
        </div>
        <div class="radio">
          <label>
            <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
            Option two can be something else and selecting it will deselect option one
          </label>
        </div>
        <div class="radio disabled">
          <label>
            <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3" disabled>
            Option three is disabled
          </label>
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox"> Check me out
          </label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
</div>
