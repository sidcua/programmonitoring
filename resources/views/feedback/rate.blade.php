<div class="row justify-content-center" style="margin-top: 50px;">
    <div class="col-lg-10 text-center">
        <p class="h1">What is the level of satisfaction regarding their service?</p>
        <p class="h6">Click on the circle under the emoji that corresponds your feedback.</p>
    </div>
</div>
<form id="rate-form">
    {{csrf_field()}}
    <div class="row justify-content-center" style="margin-top: 50px;">
        <div class="col-lg-2 text-center">
            <span class="ec ec-grin over"></span>
            <p class="h4 text-success">Very Satisfied</p>
            <input type="radio" class="option-input radio" name="rate" value="5" />
        </div>
        <div class="col-lg-2 text-center">
            <span class="ec ec-slightly-smiling-face over"></span>
            <p class="h4" style="color: limegreen;">Satisfied</p>
            <input type="radio" class="option-input radio" name="rate" value="4" />
        </div>
        <div class="col-lg-2 text-center">
            <span class="ec ec-neutral-face over"></span>
            <p class="h4" style="color: yellow;">Neutral</p>
            <input type="radio" class="option-input radio" name="rate" value="3" />
        </div>
        <div class="col-lg-2 text-center">
            <span class="ec ec-slightly-frowning-face over"></span>
            <p class="h4" style="color: orange;">Dissatisfied</p>
            <input type="radio" class="option-input radio" name="rate" value="2" />
        </div>
        <div class="col-lg-2 text-center">
            <span class="ec ec-pensive over"></span>
            <p class="h4 text-danger">Very Dissatisfied</p>
            <input type="radio" class="option-input radio" name="rate" value="1" />
        </div>
    </div>
    <div class="row justify-content-center" style="margin-top: 50px;">
        <div class="col-lg-10">
            <div class="form-group">
                <label for="exampleFormControlTextarea1" class="h3">Other Comments</label>
                <textarea class="form-control" name="comment" rows="3"></textarea>
            </div>
            <button id="submit-feedback-button" type="button" class="btn btn-primary btn-lg float-right">Submit</button>
        </div>
    </div>
</form>
<script>
    $("#submit-feedback-button").on('click', function(){
        submitRate();
    })
</script>