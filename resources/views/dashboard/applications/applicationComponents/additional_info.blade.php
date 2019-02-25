<!-- End: Student Data -->
<form class="m-form m-form--fit m-form--label-align-right">
    <div class="m-portlet__body">
        <div class="form-group m-form__group m--margin-top-10 m--hide">
            <div class="alert m-alert m-alert--default" role="alert">

            </div>
        </div>


        <!--------------------------- Begin: Additional info------------------------>
        <div class="m-form__seperator m-form__seperator--dashed m-form__seperator--space-2x"></div>
        <div class="form-group m-form__group row">
            <div class="col-10 ml-auto">
                <h3 class="m-form__section">
                    7. Additional Info
                </h3>
            </div>
        </div>


        <!-- Begin: More about child -->
        <div class="form-group m-form__group row">
            <label class="col-form-label col-lg-2 col-sm-12">
                interests
            </label>
            <div class="col-lg-7 col-md-9 col-sm-12">
                <textarea class="form-control m-input" id="exampleTextarea" rows="3" disabled
                          style="resize: none">{{$application->appinfo[0]->interests}}</textarea>

            </div>
        </div>


        <!-- Begin: Why Choosing New Discovery -->
        <div class="form-group m-form__group row">
            <label class="col-form-label col-lg-2 col-sm-12">
                Why Choosing New Discovery
            </label>
            <div class="col-lg-7 col-md-9 col-sm-12">
                <textarea class="form-control m-input" id="exampleTextarea" rows="3" disabled
                          style="resize: none">{{$application->appinfo[0]->Why}}</textarea>
            </div>
        </div>


        <!-- Begin: Gender -->
        <div class="form-group m-form__group row">
            <label class="col-form-label col-lg-2 col-sm-12">
                Parent status
            </label>
            <div class="col-lg-7 col-md-9 col-sm-12">
                <input class="form-control m-input" type="text" value="{{$application->parentstatus->status}}" disabled="">
            </div>
        </div>

        <div class="m-portlet__foot m-portlet__foot--fit">
            <div class="m-form__actions">
                <div class="row">
                    <div class="col-2"></div>
                    <div class="col-7">
                        <button type="reset" class="btn btn-accent m-btn m-btn--air m-btn--custom">
                            Save changes
                        </button>
                        &nbsp;&nbsp;
                        <button type="reset" class="btn btn-secondary m-btn m-btn--air m-btn--custom">
                            Cancel
                        </button>
                    </div>
                </div>
            </div>
        </div>


    </div>
</form>

