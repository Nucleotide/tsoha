<form class="form-horizontal">
<fieldset>

<!-- Form Name -->
<legend>Lisää puute</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Tiedot</label>  
  <div class="col-md-4">
  <input id="textinput" name="textinput" type="text" placeholder="Mitä puuttuu?" class="form-control input-md" required="">

  </div>
</div>

<!-- Multiple Checkboxes -->
<div class="form-group">
  <label class="col-md-4 control-label" for="checkboxes">Valitse mökki</label>
  <div class="col-md-4">
  <div class="checkbox">
    <label for="checkboxes-0">
      <input type="checkbox" name="checkboxes" id="checkboxes-0" value="1">
      Mökki 1
    </label>
        </div>
  <div class="checkbox">
    <label for="checkboxes-1">
      <input type="checkbox" name="checkboxes" id="checkboxes-1" value="2">
      Mökki 2
    </label>
        </div>
  </div>
</div>

</fieldset>
</form>

<a class="btn btn-success" type="button" href="">Tallenna</a>
<a class="btn btn-danger" type="button" href="">Peruuta</a>