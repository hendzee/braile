<div class="row">
  <form class="col m6">
    <h5>Data Learning</h5>
    <div class="row">
      <!--input field-->
      <div class="col m12">
        <div class="input-field col m12">
          <input name="text_iterasi" type="text" class="validate">
          <label>Max Iterasi</label>
        </div>
        <div class="input-field col m12">
          <input name="text_learning" type="text" class="validate">
          <label>Learning Rate</label>
        </div>
        <div class="input-field col m12">
          <input name="text_target" type="text" class="validate">
          <label>Target Error</label>
        </div>
        <div class="input-field col m12">
          <input name="text_node" type="text" class="validate">
          <label>Jumlah Node pada Hidden Layer</label>
        </div>
        <div class="input-field col m12">
          <input name="sel_jumlah_input" type="text" class="validate">
          <label>Jumlah Huruf</label>
        </div>
        <div class="row">
          <div class="col m4">
            <a class="waves-effect waves-light btn" onclick="submit_learn()">submit</a>
          </div>
          <div class="col m4">
            <a class="waves-effect waves-light btn red" onclick="reset_form()">reset</a>
          </div>
        </div>
      </div>
    </div>
  </form>
  <div class="col m6 left-side" id="canvas-content">
  </div>
</div>
