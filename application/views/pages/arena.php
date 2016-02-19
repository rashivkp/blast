

<?php echo validation_errors(); ?>

<div class="text-center container">
      <img src="<?php echo base_url('levels/'.$level['question']) ?>"

      class="img-rounded col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1 " style="border-style:solid; border-color:#0bffff; border-width:2px">
 </div>

  <br>

  <!--<?php  echo $level['html_clue'] ?> -->


      <div class="col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">

        <?php echo form_open('pages/answer',array('role'=>'form')) ?>

          <div class="input-group input-group-lg">

            <input type="text" name="answer" value="" class="form-control" placeholder="<?php echo $level['textbox_clue']?> "  />

            <span class="input-group-btn">

              <button class="btn Dagger colblack" type="submit">Submit</button>

            </span>

          </div>

        </form>

      </div>

</div>

