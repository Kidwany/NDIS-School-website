<!-- End: Student Data -->
<form class="m-form m-form--fit m-form--label-align-right">
    <div class="m-portlet__body">
        <div class="form-group m-form__group m--margin-top-10 m--hide">
            <div class="alert m-alert m-alert--default" role="alert">
                The example form below demonstrates common HTML form elements that receive updated styles from Bootstrap with additional classes.
            </div>
        </div>

        <!--------------------------- END: Diagnostic Test ------------------------>
        <div class="form-group m-form__group row">
            <div class="col-10 ml-auto">
                <h3 class="m-form__section">
                    1. Diagnostic Test
                </h3>
            </div>
        </div>

        <!-- Begin: Student Name -->
        <div class="form-group m-form__group row">
            <label for="example-text-input" class="col-2 col-form-label" >
                Diagnostic Test Appointment
            </label>
            <div class="col-7">
                <div class='input-group'>
                    <input type='date' class="form-control m-input" name="diagnostic_test_date" value="{{old('expiredate')}}" placeholder="Select date" id='m_datepicker'/>
                    <div class="input-group-append">
                        <span class="input-group-text">
                            <i class="la la-calendar-check-o"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Begin: Grade -->
        <div class="form-group m-form__group row">
            <label class="col-form-label col-lg-2 col-sm-12">
                Diagnostic Test Result
            </label>
            <div class="col-lg-7 col-md-9 col-sm-12">
                <select class="form-control m-select2" id="m_select2_7"  name="diagnostic_test_result">
                    <option selected>Select Diagnostic Test Result</option>
                    <option value="1">
                        Passed
                    </option>
                    <option value="0">
                        Failed
                    </option>
                    <option value="2" >
                        Waiting List
                    </option>
                </select>
            </div>
        </div>


        <!--------------------------- END: Diagnostic Test Appointment ------------------------>
        <div class="m-form__seperator m-form__seperator--dashed m-form__seperator--space-2x"></div>
        <div class="form-group m-form__group row">
            <div class="col-10 ml-auto">
                <h3 class="m-form__section">
                    2. Parents Meeting
                </h3>
            </div>
        </div>

        <!-- Begin: Father Name  -->
        <div class="form-group m-form__group row">
            <label for="example-text-input" class="col-2 col-form-label">
                Parents Meeting Appointment
            </label>
            <div class="col-7">
                <input class="form-control m-input" type="date" name="parents_meeting_result">
            </div>
        </div>



        <!-- Begin: Nationality -->
        <div class="form-group m-form__group row">
            <label class="col-form-label col-lg-2 col-sm-12">
                Parents Meeting Result
            </label>
            <div class="col-lg-7 col-md-9 col-sm-12">
                <select class="form-control" id="m_select2_7"  name="parents_meeting_result">
                    <option selected>Select Diagnostic Test Result</option>
                    <option value="1">
                        Passed
                    </option>
                    <option value="0">
                        Failed
                    </option>
                    <option value="2" >
                        Waiting List
                    </option>
                </select>
            </div>
        </div>



        <!--------------------------- END: Assessment ------------------------>
        <div class="m-form__seperator m-form__seperator--dashed m-form__seperator--space-2x"></div>
        <div class="form-group m-form__group row">
            <div class="col-10 ml-auto">
                <h3 class="m-form__section">
                    3. Assessment
                </h3>
            </div>
        </div>

        <!-- Begin: Assessment Appointment  -->
        <div class="form-group m-form__group row">
            <label for="example-text-input" class="col-2 col-form-label">
                Assessment Appointment
            </label>
            <div class="col-7">
                <div class='input-group'>
                    <input type='date' class="form-control m-input" name="assessment_date" value="{{old('assessment_date')}}" placeholder="Select date" id='m_datepicker'/>
                    <div class="input-group-append">
                        <span class="input-group-text">
                            <i class="la la-calendar-check-o"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>


        <!-- Begin: Nationality -->
        <div class="form-group m-form__group row">
            <label class="col-form-label col-lg-2 col-sm-12">
                Assessment Result
            </label>
            <div class="col-lg-7 col-md-9 col-sm-12">
                <input class="form-control m-input" type="number" name="assessment_result">
            </div>
        </div>





        <!--------------------------- Begin: Reservation Fee ------------------------>
        <div class="m-form__seperator m-form__seperator--dashed m-form__seperator--space-2x"></div>
        <div class="form-group m-form__group row">
            <div class="col-10 ml-auto">
                <h3 class="m-form__section">
                    4. Reservation Fee
                </h3>
            </div>
        </div>

        <!-- Begin: Fathe Name  -->
        <div class="form-group m-form__group row">
            <label for="example-text-input" class="col-2 col-form-label">
                Amount
            </label>
            <div class="col-7">
                <input class="form-control m-input" type="number" name="reservation_fee" placeholder="Enter The Amount Of Reservation Fee ex: 2500 L.E">
            </div>
        </div>

        <div class="form-group m-form__group row">
            <label for="example-text-input" class="col-2 col-form-label">
                Parents Meeting Appointment
            </label>
            <div class="col-7">
                <input class="form-control m-input" type="date" name="parents_meeting_result">
            </div>
        </div>


        <div class="m-form__seperator m-form__seperator--dashed m-form__seperator--space-2x"></div>


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
