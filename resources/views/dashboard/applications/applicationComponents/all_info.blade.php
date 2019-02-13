<!-- End: Student Data -->
<form class="m-form m-form--fit m-form--label-align-right">
    <div class="m-portlet__body">
        <div class="form-group m-form__group m--margin-top-10 m--hide">
            <div class="alert m-alert m-alert--default" role="alert">
                The example form below demonstrates common HTML form elements that receive updated styles from Bootstrap with additional classes.
            </div>
        </div>

        <!--------------------------- END: Student Info ------------------------>
        <div class="form-group m-form__group row">
            <div class="col-10 ml-auto">
                <h3 class="m-form__section">
                    1. Student Basic Info
                </h3>
            </div>
        </div>

        <!-- Begin: Student Name -->
        <div class="form-group m-form__group row">
            <label for="example-text-input" class="col-2 col-form-label" >
                Student Full Name
            </label>
            <div class="col-7">
                <input class="form-control m-input" type="text" value="Mark Andre" disabled>
            </div>
        </div>

        <!-- Begin: Grade -->
        <div class="form-group m-form__group row">
            <label class="col-form-label col-lg-2 col-sm-12">
                Applying For Grade
            </label>
            <div class="col-lg-7 col-md-9 col-sm-12">
                <select class="form-control m-select2" id="m_select2_7"  name="param" disabled="">
                    <option></option>
                    <optgroup label="Alaskan/Hawaiian Time Zone">
                        <option value="AK" selected>
                            Grade 1
                        </option>
                    </optgroup>
                    {{--<optgroup label="Pacific Time Zone">
                        <option value="CA">
                            California
                        </option>
                        <option value="NV">
                            Nevada
                        </option>
                        <option value="OR">
                            Oregon
                        </option>
                        <option value="WA">
                            Washington
                        </option>
                    </optgroup>
                    <optgroup label="Mountain Time Zone">
                        <option value="AZ">
                            Arizona
                        </option>
                        <option value="CO">
                            Colorado
                        </option>
                        <option value="ID">
                            Idaho
                        </option>
                        <option value="MT">
                            Montana
                        </option>
                        <option value="NE">
                            Nebraska
                        </option>
                        <option value="NM">
                            New Mexico
                        </option>
                        <option value="ND">
                            North Dakota
                        </option>
                        <option value="UT">
                            Utah
                        </option>
                        <option value="WY">
                            Wyoming
                        </option>
                    </optgroup>
                    <optgroup label="Central Time Zone">
                        <option value="AL">
                            Alabama
                        </option>
                        <option value="AR">
                            Arkansas
                        </option>
                        <option value="IL">
                            Illinois
                        </option>
                        <option value="IA">
                            Iowa
                        </option>
                        <option value="KS">
                            Kansas
                        </option>
                        <option value="KY">
                            Kentucky
                        </option>
                        <option value="LA">
                            Louisiana
                        </option>
                        <option value="MN">
                            Minnesota
                        </option>
                        <option value="MS">
                            Mississippi
                        </option>
                        <option value="MO">
                            Missouri
                        </option>
                        <option value="OK">
                            Oklahoma
                        </option>
                        <option value="SD">
                            South Dakota
                        </option>
                        <option value="TX">
                            Texas
                        </option>
                        <option value="TN">
                            Tennessee
                        </option>
                        <option value="WI">
                            Wisconsin
                        </option>
                    </optgroup>
                    <optgroup label="Eastern Time Zone">
                        <option value="CT">
                            Connecticut
                        </option>
                        <option value="DE">
                            Delaware
                        </option>
                        <option value="FL">
                            Florida
                        </option>
                        <option value="GA">
                            Georgia
                        </option>
                        <option value="IN">
                            Indiana
                        </option>
                        <option value="ME">
                            Maine
                        </option>
                        <option value="MD">
                            Maryland
                        </option>
                        <option value="MA">
                            Massachusetts
                        </option>
                        <option value="MI">
                            Michigan
                        </option>
                        <option value="NH">
                            New Hampshire
                        </option>
                        <option value="NJ">
                            New Jersey
                        </option>
                        <option value="NY">
                            New York
                        </option>
                        <option value="NC">
                            North Carolina
                        </option>
                        <option value="OH">
                            Ohio
                        </option>
                        <option value="PA">
                            Pennsylvania
                        </option>
                        <option value="RI">
                            Rhode Island
                        </option>
                        <option value="SC">
                            South Carolina
                        </option>
                        <option value="VT">
                            Vermont
                        </option>
                        <option value="VA">
                            Virginia
                        </option>
                        <option value="WV">
                            West Virginia
                        </option>
                    </optgroup>--}}
                </select>
            </div>
        </div>


        <!-- Begin:  Religion -->
        <div class="form-group m-form__group row">
            <label class="col-form-label col-lg-2 col-sm-12">
                Religion
            </label>
            <div class="col-lg-7 col-md-9 col-sm-12">
                <select class="form-control m-select2" id="m_select2_7"  name="param" disabled="">
                    <option></option>
                    <optgroup label="Alaskan/Hawaiian Time Zone">
                        <option value="AK" selected>
                            Muslim
                        </option>
                    </optgroup>
                    <optgroup label="Pacific Time Zone">
                        <option value="CA">
                            California
                        </option>
                        <option value="NV">
                            Nevada
                        </option>
                        <option value="OR">
                            Oregon
                        </option>
                        <option value="WA">
                            Washington
                        </option>
                    </optgroup>
                    {{--<optgroup label="Pacific Time Zone">
                        <option value="CA">
                            California
                        </option>
                        <option value="NV">
                            Nevada
                        </option>
                        <option value="OR">
                            Oregon
                        </option>
                        <option value="WA">
                            Washington
                        </option>
                    </optgroup>
                    <optgroup label="Mountain Time Zone">
                        <option value="AZ">
                            Arizona
                        </option>
                        <option value="CO">
                            Colorado
                        </option>
                        <option value="ID">
                            Idaho
                        </option>
                        <option value="MT">
                            Montana
                        </option>
                        <option value="NE">
                            Nebraska
                        </option>
                        <option value="NM">
                            New Mexico
                        </option>
                        <option value="ND">
                            North Dakota
                        </option>
                        <option value="UT">
                            Utah
                        </option>
                        <option value="WY">
                            Wyoming
                        </option>
                    </optgroup>
                    <optgroup label="Central Time Zone">
                        <option value="AL">
                            Alabama
                        </option>
                        <option value="AR">
                            Arkansas
                        </option>
                        <option value="IL">
                            Illinois
                        </option>
                        <option value="IA">
                            Iowa
                        </option>
                        <option value="KS">
                            Kansas
                        </option>
                        <option value="KY">
                            Kentucky
                        </option>
                        <option value="LA">
                            Louisiana
                        </option>
                        <option value="MN">
                            Minnesota
                        </option>
                        <option value="MS">
                            Mississippi
                        </option>
                        <option value="MO">
                            Missouri
                        </option>
                        <option value="OK">
                            Oklahoma
                        </option>
                        <option value="SD">
                            South Dakota
                        </option>
                        <option value="TX">
                            Texas
                        </option>
                        <option value="TN">
                            Tennessee
                        </option>
                        <option value="WI">
                            Wisconsin
                        </option>
                    </optgroup>
                    <optgroup label="Eastern Time Zone">
                        <option value="CT">
                            Connecticut
                        </option>
                        <option value="DE">
                            Delaware
                        </option>
                        <option value="FL">
                            Florida
                        </option>
                        <option value="GA">
                            Georgia
                        </option>
                        <option value="IN">
                            Indiana
                        </option>
                        <option value="ME">
                            Maine
                        </option>
                        <option value="MD">
                            Maryland
                        </option>
                        <option value="MA">
                            Massachusetts
                        </option>
                        <option value="MI">
                            Michigan
                        </option>
                        <option value="NH">
                            New Hampshire
                        </option>
                        <option value="NJ">
                            New Jersey
                        </option>
                        <option value="NY">
                            New York
                        </option>
                        <option value="NC">
                            North Carolina
                        </option>
                        <option value="OH">
                            Ohio
                        </option>
                        <option value="PA">
                            Pennsylvania
                        </option>
                        <option value="RI">
                            Rhode Island
                        </option>
                        <option value="SC">
                            South Carolina
                        </option>
                        <option value="VT">
                            Vermont
                        </option>
                        <option value="VA">
                            Virginia
                        </option>
                        <option value="WV">
                            West Virginia
                        </option>
                    </optgroup>--}}
                </select>
            </div>
        </div>


        <!-- Begin: Nationality -->
        <div class="form-group m-form__group row">
            <label class="col-form-label col-lg-2 col-sm-12">
                Student Nationality
            </label>
            <div class="col-lg-7 col-md-9 col-sm-12">
                <select class="form-control m-select2" id="m_select2_7"  name="param" disabled="">
                    <option></option>
                    <optgroup label="Alaskan/Hawaiian Time Zone">
                        <option value="AK" selected>
                            Egyptian
                        </option>
                    </optgroup>
                    {{--<optgroup label="Pacific Time Zone">
                        <option value="CA">
                            California
                        </option>
                        <option value="NV">
                            Nevada
                        </option>
                        <option value="OR">
                            Oregon
                        </option>
                        <option value="WA">
                            Washington
                        </option>
                    </optgroup>
                    <optgroup label="Mountain Time Zone">
                        <option value="AZ">
                            Arizona
                        </option>
                        <option value="CO">
                            Colorado
                        </option>
                        <option value="ID">
                            Idaho
                        </option>
                        <option value="MT">
                            Montana
                        </option>
                        <option value="NE">
                            Nebraska
                        </option>
                        <option value="NM">
                            New Mexico
                        </option>
                        <option value="ND">
                            North Dakota
                        </option>
                        <option value="UT">
                            Utah
                        </option>
                        <option value="WY">
                            Wyoming
                        </option>
                    </optgroup>
                    <optgroup label="Central Time Zone">
                        <option value="AL">
                            Alabama
                        </option>
                        <option value="AR">
                            Arkansas
                        </option>
                        <option value="IL">
                            Illinois
                        </option>
                        <option value="IA">
                            Iowa
                        </option>
                        <option value="KS">
                            Kansas
                        </option>
                        <option value="KY">
                            Kentucky
                        </option>
                        <option value="LA">
                            Louisiana
                        </option>
                        <option value="MN">
                            Minnesota
                        </option>
                        <option value="MS">
                            Mississippi
                        </option>
                        <option value="MO">
                            Missouri
                        </option>
                        <option value="OK">
                            Oklahoma
                        </option>
                        <option value="SD">
                            South Dakota
                        </option>
                        <option value="TX">
                            Texas
                        </option>
                        <option value="TN">
                            Tennessee
                        </option>
                        <option value="WI">
                            Wisconsin
                        </option>
                    </optgroup>
                    <optgroup label="Eastern Time Zone">
                        <option value="CT">
                            Connecticut
                        </option>
                        <option value="DE">
                            Delaware
                        </option>
                        <option value="FL">
                            Florida
                        </option>
                        <option value="GA">
                            Georgia
                        </option>
                        <option value="IN">
                            Indiana
                        </option>
                        <option value="ME">
                            Maine
                        </option>
                        <option value="MD">
                            Maryland
                        </option>
                        <option value="MA">
                            Massachusetts
                        </option>
                        <option value="MI">
                            Michigan
                        </option>
                        <option value="NH">
                            New Hampshire
                        </option>
                        <option value="NJ">
                            New Jersey
                        </option>
                        <option value="NY">
                            New York
                        </option>
                        <option value="NC">
                            North Carolina
                        </option>
                        <option value="OH">
                            Ohio
                        </option>
                        <option value="PA">
                            Pennsylvania
                        </option>
                        <option value="RI">
                            Rhode Island
                        </option>
                        <option value="SC">
                            South Carolina
                        </option>
                        <option value="VT">
                            Vermont
                        </option>
                        <option value="VA">
                            Virginia
                        </option>
                        <option value="WV">
                            West Virginia
                        </option>
                    </optgroup>--}}
                </select>
            </div>
        </div>


        <!-- Begin: Bus Address -->
        <div class="form-group m-form__group row">
            <label for="example-text-input" class="col-2 col-form-label" >
                Bus Address
            </label>
            <div class="col-7">
                <input class="form-control m-input" type="text" value="Haram" disabled>
            </div>
        </div>



        <!-- Begin: Age -->
        <div class="form-group m-form__group row">
            <label class="col-form-label col-lg-2 col-sm-12">
                Age in 1st of October
            </label>
            <div class="col-lg-2 col-md-9 col-sm-12">
                <select class="form-control m-select2" id="m_select2_7"  name="param" disabled="">
                    <option></option>
                    <optgroup label="Alaskan/Hawaiian Time Zone">
                        <option value="AK" selected>
                            2011
                        </option>
                    </optgroup>
                    {{--<optgroup label="Pacific Time Zone">
                        <option value="CA">
                            California
                        </option>
                        <option value="NV">
                            Nevada
                        </option>
                        <option value="OR">
                            Oregon
                        </option>
                        <option value="WA">
                            Washington
                        </option>
                    </optgroup>
                    <optgroup label="Mountain Time Zone">
                        <option value="AZ">
                            Arizona
                        </option>
                        <option value="CO">
                            Colorado
                        </option>
                        <option value="ID">
                            Idaho
                        </option>
                        <option value="MT">
                            Montana
                        </option>
                        <option value="NE">
                            Nebraska
                        </option>
                        <option value="NM">
                            New Mexico
                        </option>
                        <option value="ND">
                            North Dakota
                        </option>
                        <option value="UT">
                            Utah
                        </option>
                        <option value="WY">
                            Wyoming
                        </option>
                    </optgroup>
                    <optgroup label="Central Time Zone">
                        <option value="AL">
                            Alabama
                        </option>
                        <option value="AR">
                            Arkansas
                        </option>
                        <option value="IL">
                            Illinois
                        </option>
                        <option value="IA">
                            Iowa
                        </option>
                        <option value="KS">
                            Kansas
                        </option>
                        <option value="KY">
                            Kentucky
                        </option>
                        <option value="LA">
                            Louisiana
                        </option>
                        <option value="MN">
                            Minnesota
                        </option>
                        <option value="MS">
                            Mississippi
                        </option>
                        <option value="MO">
                            Missouri
                        </option>
                        <option value="OK">
                            Oklahoma
                        </option>
                        <option value="SD">
                            South Dakota
                        </option>
                        <option value="TX">
                            Texas
                        </option>
                        <option value="TN">
                            Tennessee
                        </option>
                        <option value="WI">
                            Wisconsin
                        </option>
                    </optgroup>
                    <optgroup label="Eastern Time Zone">
                        <option value="CT">
                            Connecticut
                        </option>
                        <option value="DE">
                            Delaware
                        </option>
                        <option value="FL">
                            Florida
                        </option>
                        <option value="GA">
                            Georgia
                        </option>
                        <option value="IN">
                            Indiana
                        </option>
                        <option value="ME">
                            Maine
                        </option>
                        <option value="MD">
                            Maryland
                        </option>
                        <option value="MA">
                            Massachusetts
                        </option>
                        <option value="MI">
                            Michigan
                        </option>
                        <option value="NH">
                            New Hampshire
                        </option>
                        <option value="NJ">
                            New Jersey
                        </option>
                        <option value="NY">
                            New York
                        </option>
                        <option value="NC">
                            North Carolina
                        </option>
                        <option value="OH">
                            Ohio
                        </option>
                        <option value="PA">
                            Pennsylvania
                        </option>
                        <option value="RI">
                            Rhode Island
                        </option>
                        <option value="SC">
                            South Carolina
                        </option>
                        <option value="VT">
                            Vermont
                        </option>
                        <option value="VA">
                            Virginia
                        </option>
                        <option value="WV">
                            West Virginia
                        </option>
                    </optgroup>--}}
                </select>
            </div>
            <div class="col-lg-2 col-md-9 col-sm-12">
                <select class="form-control m-select2" id="m_select2_7"  name="param" disabled="">
                    <option></option>
                    <optgroup label="Alaskan/Hawaiian Time Zone">
                        <option value="AK" selected>
                            December
                        </option>
                    </optgroup>
                    {{--<optgroup label="Pacific Time Zone">
                        <option value="CA">
                            California
                        </option>
                        <option value="NV">
                            Nevada
                        </option>
                        <option value="OR">
                            Oregon
                        </option>
                        <option value="WA">
                            Washington
                        </option>
                    </optgroup>
                    <optgroup label="Mountain Time Zone">
                        <option value="AZ">
                            Arizona
                        </option>
                        <option value="CO">
                            Colorado
                        </option>
                        <option value="ID">
                            Idaho
                        </option>
                        <option value="MT">
                            Montana
                        </option>
                        <option value="NE">
                            Nebraska
                        </option>
                        <option value="NM">
                            New Mexico
                        </option>
                        <option value="ND">
                            North Dakota
                        </option>
                        <option value="UT">
                            Utah
                        </option>
                        <option value="WY">
                            Wyoming
                        </option>
                    </optgroup>
                    <optgroup label="Central Time Zone">
                        <option value="AL">
                            Alabama
                        </option>
                        <option value="AR">
                            Arkansas
                        </option>
                        <option value="IL">
                            Illinois
                        </option>
                        <option value="IA">
                            Iowa
                        </option>
                        <option value="KS">
                            Kansas
                        </option>
                        <option value="KY">
                            Kentucky
                        </option>
                        <option value="LA">
                            Louisiana
                        </option>
                        <option value="MN">
                            Minnesota
                        </option>
                        <option value="MS">
                            Mississippi
                        </option>
                        <option value="MO">
                            Missouri
                        </option>
                        <option value="OK">
                            Oklahoma
                        </option>
                        <option value="SD">
                            South Dakota
                        </option>
                        <option value="TX">
                            Texas
                        </option>
                        <option value="TN">
                            Tennessee
                        </option>
                        <option value="WI">
                            Wisconsin
                        </option>
                    </optgroup>
                    <optgroup label="Eastern Time Zone">
                        <option value="CT">
                            Connecticut
                        </option>
                        <option value="DE">
                            Delaware
                        </option>
                        <option value="FL">
                            Florida
                        </option>
                        <option value="GA">
                            Georgia
                        </option>
                        <option value="IN">
                            Indiana
                        </option>
                        <option value="ME">
                            Maine
                        </option>
                        <option value="MD">
                            Maryland
                        </option>
                        <option value="MA">
                            Massachusetts
                        </option>
                        <option value="MI">
                            Michigan
                        </option>
                        <option value="NH">
                            New Hampshire
                        </option>
                        <option value="NJ">
                            New Jersey
                        </option>
                        <option value="NY">
                            New York
                        </option>
                        <option value="NC">
                            North Carolina
                        </option>
                        <option value="OH">
                            Ohio
                        </option>
                        <option value="PA">
                            Pennsylvania
                        </option>
                        <option value="RI">
                            Rhode Island
                        </option>
                        <option value="SC">
                            South Carolina
                        </option>
                        <option value="VT">
                            Vermont
                        </option>
                        <option value="VA">
                            Virginia
                        </option>
                        <option value="WV">
                            West Virginia
                        </option>
                    </optgroup>--}}
                </select>
            </div>
            <div class="col-lg-2 col-md-9 col-sm-12">
                <select class="form-control m-select2" id="m_select2_7"  name="param" disabled="">
                    <option></option>
                    <optgroup label="Alaskan/Hawaiian Time Zone">
                        <option value="AK" selected>
                            14
                        </option>
                    </optgroup>
                    {{--<optgroup label="Pacific Time Zone">
                        <option value="CA">
                            California
                        </option>
                        <option value="NV">
                            Nevada
                        </option>
                        <option value="OR">
                            Oregon
                        </option>
                        <option value="WA">
                            Washington
                        </option>
                    </optgroup>
                    <optgroup label="Mountain Time Zone">
                        <option value="AZ">
                            Arizona
                        </option>
                        <option value="CO">
                            Colorado
                        </option>
                        <option value="ID">
                            Idaho
                        </option>
                        <option value="MT">
                            Montana
                        </option>
                        <option value="NE">
                            Nebraska
                        </option>
                        <option value="NM">
                            New Mexico
                        </option>
                        <option value="ND">
                            North Dakota
                        </option>
                        <option value="UT">
                            Utah
                        </option>
                        <option value="WY">
                            Wyoming
                        </option>
                    </optgroup>
                    <optgroup label="Central Time Zone">
                        <option value="AL">
                            Alabama
                        </option>
                        <option value="AR">
                            Arkansas
                        </option>
                        <option value="IL">
                            Illinois
                        </option>
                        <option value="IA">
                            Iowa
                        </option>
                        <option value="KS">
                            Kansas
                        </option>
                        <option value="KY">
                            Kentucky
                        </option>
                        <option value="LA">
                            Louisiana
                        </option>
                        <option value="MN">
                            Minnesota
                        </option>
                        <option value="MS">
                            Mississippi
                        </option>
                        <option value="MO">
                            Missouri
                        </option>
                        <option value="OK">
                            Oklahoma
                        </option>
                        <option value="SD">
                            South Dakota
                        </option>
                        <option value="TX">
                            Texas
                        </option>
                        <option value="TN">
                            Tennessee
                        </option>
                        <option value="WI">
                            Wisconsin
                        </option>
                    </optgroup>
                    <optgroup label="Eastern Time Zone">
                        <option value="CT">
                            Connecticut
                        </option>
                        <option value="DE">
                            Delaware
                        </option>
                        <option value="FL">
                            Florida
                        </option>
                        <option value="GA">
                            Georgia
                        </option>
                        <option value="IN">
                            Indiana
                        </option>
                        <option value="ME">
                            Maine
                        </option>
                        <option value="MD">
                            Maryland
                        </option>
                        <option value="MA">
                            Massachusetts
                        </option>
                        <option value="MI">
                            Michigan
                        </option>
                        <option value="NH">
                            New Hampshire
                        </option>
                        <option value="NJ">
                            New Jersey
                        </option>
                        <option value="NY">
                            New York
                        </option>
                        <option value="NC">
                            North Carolina
                        </option>
                        <option value="OH">
                            Ohio
                        </option>
                        <option value="PA">
                            Pennsylvania
                        </option>
                        <option value="RI">
                            Rhode Island
                        </option>
                        <option value="SC">
                            South Carolina
                        </option>
                        <option value="VT">
                            Vermont
                        </option>
                        <option value="VA">
                            Virginia
                        </option>
                        <option value="WV">
                            West Virginia
                        </option>
                    </optgroup>--}}
                </select>
            </div>
        </div>


        <!-- Begin: Gender -->
        <div class="form-group m-form__group row">
            <label class="col-form-label col-lg-2 col-sm-12">
                Gender
            </label>
            <div class="col-lg-3 col-md-9 col-sm-12">
                <select class="form-control m-select2" id="m_select2_7"  name="param" disabled="">
                    <option></option>
                    <optgroup label="Alaskan/Hawaiian Time Zone">
                        <option value="AK" selected>
                            Male
                        </option>
                    </optgroup>
                    {{--<optgroup label="Pacific Time Zone">
                        <option value="CA">
                            California
                        </option>
                        <option value="NV">
                            Nevada
                        </option>
                        <option value="OR">
                            Oregon
                        </option>
                        <option value="WA">
                            Washington
                        </option>
                    </optgroup>
                    <optgroup label="Mountain Time Zone">
                        <option value="AZ">
                            Arizona
                        </option>
                        <option value="CO">
                            Colorado
                        </option>
                        <option value="ID">
                            Idaho
                        </option>
                        <option value="MT">
                            Montana
                        </option>
                        <option value="NE">
                            Nebraska
                        </option>
                        <option value="NM">
                            New Mexico
                        </option>
                        <option value="ND">
                            North Dakota
                        </option>
                        <option value="UT">
                            Utah
                        </option>
                        <option value="WY">
                            Wyoming
                        </option>
                    </optgroup>
                    <optgroup label="Central Time Zone">
                        <option value="AL">
                            Alabama
                        </option>
                        <option value="AR">
                            Arkansas
                        </option>
                        <option value="IL">
                            Illinois
                        </option>
                        <option value="IA">
                            Iowa
                        </option>
                        <option value="KS">
                            Kansas
                        </option>
                        <option value="KY">
                            Kentucky
                        </option>
                        <option value="LA">
                            Louisiana
                        </option>
                        <option value="MN">
                            Minnesota
                        </option>
                        <option value="MS">
                            Mississippi
                        </option>
                        <option value="MO">
                            Missouri
                        </option>
                        <option value="OK">
                            Oklahoma
                        </option>
                        <option value="SD">
                            South Dakota
                        </option>
                        <option value="TX">
                            Texas
                        </option>
                        <option value="TN">
                            Tennessee
                        </option>
                        <option value="WI">
                            Wisconsin
                        </option>
                    </optgroup>
                    <optgroup label="Eastern Time Zone">
                        <option value="CT">
                            Connecticut
                        </option>
                        <option value="DE">
                            Delaware
                        </option>
                        <option value="FL">
                            Florida
                        </option>
                        <option value="GA">
                            Georgia
                        </option>
                        <option value="IN">
                            Indiana
                        </option>
                        <option value="ME">
                            Maine
                        </option>
                        <option value="MD">
                            Maryland
                        </option>
                        <option value="MA">
                            Massachusetts
                        </option>
                        <option value="MI">
                            Michigan
                        </option>
                        <option value="NH">
                            New Hampshire
                        </option>
                        <option value="NJ">
                            New Jersey
                        </option>
                        <option value="NY">
                            New York
                        </option>
                        <option value="NC">
                            North Carolina
                        </option>
                        <option value="OH">
                            Ohio
                        </option>
                        <option value="PA">
                            Pennsylvania
                        </option>
                        <option value="RI">
                            Rhode Island
                        </option>
                        <option value="SC">
                            South Carolina
                        </option>
                        <option value="VT">
                            Vermont
                        </option>
                        <option value="VA">
                            Virginia
                        </option>
                        <option value="WV">
                            West Virginia
                        </option>
                    </optgroup>--}}
                </select>
            </div>


            <!-- Begin: Section -->
            <label class="col-form-label col-lg-1 col-sm-12">
                Section
            </label>
            <div class="col-lg-3 col-md-9 col-sm-12">
                <select class="form-control m-select2" id="m_select2_7"  name="param" disabled="">
                    <option></option>
                    <optgroup label="Alaskan/Hawaiian Time Zone">
                        <option value="AK" selected>
                            American
                        </option>
                    </optgroup>
                    {{--<optgroup label="Pacific Time Zone">
                        <option value="CA">
                            California
                        </option>
                        <option value="NV">
                            Nevada
                        </option>
                        <option value="OR">
                            Oregon
                        </option>
                        <option value="WA">
                            Washington
                        </option>
                    </optgroup>
                    <optgroup label="Mountain Time Zone">
                        <option value="AZ">
                            Arizona
                        </option>
                        <option value="CO">
                            Colorado
                        </option>
                        <option value="ID">
                            Idaho
                        </option>
                        <option value="MT">
                            Montana
                        </option>
                        <option value="NE">
                            Nebraska
                        </option>
                        <option value="NM">
                            New Mexico
                        </option>
                        <option value="ND">
                            North Dakota
                        </option>
                        <option value="UT">
                            Utah
                        </option>
                        <option value="WY">
                            Wyoming
                        </option>
                    </optgroup>
                    <optgroup label="Central Time Zone">
                        <option value="AL">
                            Alabama
                        </option>
                        <option value="AR">
                            Arkansas
                        </option>
                        <option value="IL">
                            Illinois
                        </option>
                        <option value="IA">
                            Iowa
                        </option>
                        <option value="KS">
                            Kansas
                        </option>
                        <option value="KY">
                            Kentucky
                        </option>
                        <option value="LA">
                            Louisiana
                        </option>
                        <option value="MN">
                            Minnesota
                        </option>
                        <option value="MS">
                            Mississippi
                        </option>
                        <option value="MO">
                            Missouri
                        </option>
                        <option value="OK">
                            Oklahoma
                        </option>
                        <option value="SD">
                            South Dakota
                        </option>
                        <option value="TX">
                            Texas
                        </option>
                        <option value="TN">
                            Tennessee
                        </option>
                        <option value="WI">
                            Wisconsin
                        </option>
                    </optgroup>
                    <optgroup label="Eastern Time Zone">
                        <option value="CT">
                            Connecticut
                        </option>
                        <option value="DE">
                            Delaware
                        </option>
                        <option value="FL">
                            Florida
                        </option>
                        <option value="GA">
                            Georgia
                        </option>
                        <option value="IN">
                            Indiana
                        </option>
                        <option value="ME">
                            Maine
                        </option>
                        <option value="MD">
                            Maryland
                        </option>
                        <option value="MA">
                            Massachusetts
                        </option>
                        <option value="MI">
                            Michigan
                        </option>
                        <option value="NH">
                            New Hampshire
                        </option>
                        <option value="NJ">
                            New Jersey
                        </option>
                        <option value="NY">
                            New York
                        </option>
                        <option value="NC">
                            North Carolina
                        </option>
                        <option value="OH">
                            Ohio
                        </option>
                        <option value="PA">
                            Pennsylvania
                        </option>
                        <option value="RI">
                            Rhode Island
                        </option>
                        <option value="SC">
                            South Carolina
                        </option>
                        <option value="VT">
                            Vermont
                        </option>
                        <option value="VA">
                            Virginia
                        </option>
                        <option value="WV">
                            West Virginia
                        </option>
                    </optgroup>--}}
                </select>
            </div>
        </div>



        <!-- Begin: Second Language -->
        <div class="form-group m-form__group row">
            <label class="col-form-label col-lg-2 col-sm-12">
                Second Language
            </label>
            <div class="col-lg-7 col-md-9 col-sm-12">
                <select class="form-control m-select2" id="m_select2_7"  name="param" disabled="">
                    <option></option>
                    <optgroup label="Alaskan/Hawaiian Time Zone">
                        <option value="AK" selected>
                            English
                        </option>
                    </optgroup>
                    {{--<optgroup label="Pacific Time Zone">
                        <option value="CA">
                            California
                        </option>
                        <option value="NV">
                            Nevada
                        </option>
                        <option value="OR">
                            Oregon
                        </option>
                        <option value="WA">
                            Washington
                        </option>
                    </optgroup>
                    <optgroup label="Mountain Time Zone">
                        <option value="AZ">
                            Arizona
                        </option>
                        <option value="CO">
                            Colorado
                        </option>
                        <option value="ID">
                            Idaho
                        </option>
                        <option value="MT">
                            Montana
                        </option>
                        <option value="NE">
                            Nebraska
                        </option>
                        <option value="NM">
                            New Mexico
                        </option>
                        <option value="ND">
                            North Dakota
                        </option>
                        <option value="UT">
                            Utah
                        </option>
                        <option value="WY">
                            Wyoming
                        </option>
                    </optgroup>
                    <optgroup label="Central Time Zone">
                        <option value="AL">
                            Alabama
                        </option>
                        <option value="AR">
                            Arkansas
                        </option>
                        <option value="IL">
                            Illinois
                        </option>
                        <option value="IA">
                            Iowa
                        </option>
                        <option value="KS">
                            Kansas
                        </option>
                        <option value="KY">
                            Kentucky
                        </option>
                        <option value="LA">
                            Louisiana
                        </option>
                        <option value="MN">
                            Minnesota
                        </option>
                        <option value="MS">
                            Mississippi
                        </option>
                        <option value="MO">
                            Missouri
                        </option>
                        <option value="OK">
                            Oklahoma
                        </option>
                        <option value="SD">
                            South Dakota
                        </option>
                        <option value="TX">
                            Texas
                        </option>
                        <option value="TN">
                            Tennessee
                        </option>
                        <option value="WI">
                            Wisconsin
                        </option>
                    </optgroup>
                    <optgroup label="Eastern Time Zone">
                        <option value="CT">
                            Connecticut
                        </option>
                        <option value="DE">
                            Delaware
                        </option>
                        <option value="FL">
                            Florida
                        </option>
                        <option value="GA">
                            Georgia
                        </option>
                        <option value="IN">
                            Indiana
                        </option>
                        <option value="ME">
                            Maine
                        </option>
                        <option value="MD">
                            Maryland
                        </option>
                        <option value="MA">
                            Massachusetts
                        </option>
                        <option value="MI">
                            Michigan
                        </option>
                        <option value="NH">
                            New Hampshire
                        </option>
                        <option value="NJ">
                            New Jersey
                        </option>
                        <option value="NY">
                            New York
                        </option>
                        <option value="NC">
                            North Carolina
                        </option>
                        <option value="OH">
                            Ohio
                        </option>
                        <option value="PA">
                            Pennsylvania
                        </option>
                        <option value="RI">
                            Rhode Island
                        </option>
                        <option value="SC">
                            South Carolina
                        </option>
                        <option value="VT">
                            Vermont
                        </option>
                        <option value="VA">
                            Virginia
                        </option>
                        <option value="WV">
                            West Virginia
                        </option>
                    </optgroup>--}}
                </select>
            </div>
        </div>




        <!--------------------------- END: Father Info ------------------------>
        <div class="m-form__seperator m-form__seperator--dashed m-form__seperator--space-2x"></div>
        <div class="form-group m-form__group row">
            <div class="col-10 ml-auto">
                <h3 class="m-form__section">
                    2. Father Info
                </h3>
            </div>
        </div>

        <!-- Begin: Fathe Name  -->
        <div class="form-group m-form__group row">
            <label for="example-text-input" class="col-2 col-form-label">
                Father Full Name
            </label>
            <div class="col-7">
                <input class="form-control m-input" type="text" value="Ahmed Mustfa Hossam" disabled="">
            </div>
        </div>


        <!-- Begin: Nationality -->
        <div class="form-group m-form__group row">
            <label class="col-form-label col-lg-2 col-sm-12">
                Father Nationality
            </label>
            <div class="col-lg-7 col-md-9 col-sm-12">
                <select class="form-control m-select2" id="m_select2_7"  name="param" disabled="">
                    <option></option>
                    <optgroup label="Alaskan/Hawaiian Time Zone">
                        <option value="AK" selected>
                            Egyptian
                        </option>
                    </optgroup>
                    {{--<optgroup label="Pacific Time Zone">
                        <option value="CA">
                            California
                        </option>
                        <option value="NV">
                            Nevada
                        </option>
                        <option value="OR">
                            Oregon
                        </option>
                        <option value="WA">
                            Washington
                        </option>
                    </optgroup>
                    <optgroup label="Mountain Time Zone">
                        <option value="AZ">
                            Arizona
                        </option>
                        <option value="CO">
                            Colorado
                        </option>
                        <option value="ID">
                            Idaho
                        </option>
                        <option value="MT">
                            Montana
                        </option>
                        <option value="NE">
                            Nebraska
                        </option>
                        <option value="NM">
                            New Mexico
                        </option>
                        <option value="ND">
                            North Dakota
                        </option>
                        <option value="UT">
                            Utah
                        </option>
                        <option value="WY">
                            Wyoming
                        </option>
                    </optgroup>
                    <optgroup label="Central Time Zone">
                        <option value="AL">
                            Alabama
                        </option>
                        <option value="AR">
                            Arkansas
                        </option>
                        <option value="IL">
                            Illinois
                        </option>
                        <option value="IA">
                            Iowa
                        </option>
                        <option value="KS">
                            Kansas
                        </option>
                        <option value="KY">
                            Kentucky
                        </option>
                        <option value="LA">
                            Louisiana
                        </option>
                        <option value="MN">
                            Minnesota
                        </option>
                        <option value="MS">
                            Mississippi
                        </option>
                        <option value="MO">
                            Missouri
                        </option>
                        <option value="OK">
                            Oklahoma
                        </option>
                        <option value="SD">
                            South Dakota
                        </option>
                        <option value="TX">
                            Texas
                        </option>
                        <option value="TN">
                            Tennessee
                        </option>
                        <option value="WI">
                            Wisconsin
                        </option>
                    </optgroup>
                    <optgroup label="Eastern Time Zone">
                        <option value="CT">
                            Connecticut
                        </option>
                        <option value="DE">
                            Delaware
                        </option>
                        <option value="FL">
                            Florida
                        </option>
                        <option value="GA">
                            Georgia
                        </option>
                        <option value="IN">
                            Indiana
                        </option>
                        <option value="ME">
                            Maine
                        </option>
                        <option value="MD">
                            Maryland
                        </option>
                        <option value="MA">
                            Massachusetts
                        </option>
                        <option value="MI">
                            Michigan
                        </option>
                        <option value="NH">
                            New Hampshire
                        </option>
                        <option value="NJ">
                            New Jersey
                        </option>
                        <option value="NY">
                            New York
                        </option>
                        <option value="NC">
                            North Carolina
                        </option>
                        <option value="OH">
                            Ohio
                        </option>
                        <option value="PA">
                            Pennsylvania
                        </option>
                        <option value="RI">
                            Rhode Island
                        </option>
                        <option value="SC">
                            South Carolina
                        </option>
                        <option value="VT">
                            Vermont
                        </option>
                        <option value="VA">
                            Virginia
                        </option>
                        <option value="WV">
                            West Virginia
                        </option>
                    </optgroup>--}}
                </select>
            </div>
        </div>


        <!-- Begin: Father Email -->
        <div class="form-group m-form__group row">
            <label for="example-text-input" class="col-2 col-form-label">
                Email
            </label>
            <div class="col-7">
                <input class="form-control m-input" type="email" value="ahmed606@gmail.com" disabled="">
            </div>
        </div>

        <!-- Begin: Father Phone -->
        <div class="form-group m-form__group row">
            <label for="example-text-input" class="col-2 col-form-label">
                Phone
            </label>
            <div class="col-7">
                <input class="form-control m-input" type="number" disabled="" value="0112536844">
            </div>
        </div>

        <!-- Begin: Company -->
        <div class="form-group m-form__group row">
            <label for="example-text-input" class="col-2 col-form-label">
                Company Name
            </label>
            <div class="col-7">
                <input class="form-control m-input" type="text" value="Etisalat Misr" disabled>
            </div>
        </div>



        <!-- Begin: Job -->
        <div class="form-group m-form__group row">
            <label class="col-form-label col-lg-2 col-sm-12">
                Fathe's Job
            </label>
            <div class="col-lg-7 col-md-9 col-sm-12">
                <select class="form-control m-select2" id="m_select2_7"  name="param" disabled="">
                    <option></option>
                    <optgroup label="Alaskan/Hawaiian Time Zone">
                        <option value="AK" selected>
                            Sales Executive
                        </option>
                    </optgroup>
                    {{--<optgroup label="Pacific Time Zone">
                        <option value="CA">
                            California
                        </option>
                        <option value="NV">
                            Nevada
                        </option>
                        <option value="OR">
                            Oregon
                        </option>
                        <option value="WA">
                            Washington
                        </option>
                    </optgroup>
                    <optgroup label="Mountain Time Zone">
                        <option value="AZ">
                            Arizona
                        </option>
                        <option value="CO">
                            Colorado
                        </option>
                        <option value="ID">
                            Idaho
                        </option>
                        <option value="MT">
                            Montana
                        </option>
                        <option value="NE">
                            Nebraska
                        </option>
                        <option value="NM">
                            New Mexico
                        </option>
                        <option value="ND">
                            North Dakota
                        </option>
                        <option value="UT">
                            Utah
                        </option>
                        <option value="WY">
                            Wyoming
                        </option>
                    </optgroup>
                    <optgroup label="Central Time Zone">
                        <option value="AL">
                            Alabama
                        </option>
                        <option value="AR">
                            Arkansas
                        </option>
                        <option value="IL">
                            Illinois
                        </option>
                        <option value="IA">
                            Iowa
                        </option>
                        <option value="KS">
                            Kansas
                        </option>
                        <option value="KY">
                            Kentucky
                        </option>
                        <option value="LA">
                            Louisiana
                        </option>
                        <option value="MN">
                            Minnesota
                        </option>
                        <option value="MS">
                            Mississippi
                        </option>
                        <option value="MO">
                            Missouri
                        </option>
                        <option value="OK">
                            Oklahoma
                        </option>
                        <option value="SD">
                            South Dakota
                        </option>
                        <option value="TX">
                            Texas
                        </option>
                        <option value="TN">
                            Tennessee
                        </option>
                        <option value="WI">
                            Wisconsin
                        </option>
                    </optgroup>
                    <optgroup label="Eastern Time Zone">
                        <option value="CT">
                            Connecticut
                        </option>
                        <option value="DE">
                            Delaware
                        </option>
                        <option value="FL">
                            Florida
                        </option>
                        <option value="GA">
                            Georgia
                        </option>
                        <option value="IN">
                            Indiana
                        </option>
                        <option value="ME">
                            Maine
                        </option>
                        <option value="MD">
                            Maryland
                        </option>
                        <option value="MA">
                            Massachusetts
                        </option>
                        <option value="MI">
                            Michigan
                        </option>
                        <option value="NH">
                            New Hampshire
                        </option>
                        <option value="NJ">
                            New Jersey
                        </option>
                        <option value="NY">
                            New York
                        </option>
                        <option value="NC">
                            North Carolina
                        </option>
                        <option value="OH">
                            Ohio
                        </option>
                        <option value="PA">
                            Pennsylvania
                        </option>
                        <option value="RI">
                            Rhode Island
                        </option>
                        <option value="SC">
                            South Carolina
                        </option>
                        <option value="VT">
                            Vermont
                        </option>
                        <option value="VA">
                            Virginia
                        </option>
                        <option value="WV">
                            West Virginia
                        </option>
                    </optgroup>--}}
                </select>
            </div>
        </div>




        <!--------------------------- Begin: Mother Info ------------------------>
        <div class="m-form__seperator m-form__seperator--dashed m-form__seperator--space-2x"></div>
        <div class="form-group m-form__group row">
            <div class="col-10 ml-auto">
                <h3 class="m-form__section">
                    3. Mother Info
                </h3>
            </div>
        </div>

        <!-- Begin: Fathe Name  -->
        <div class="form-group m-form__group row">
            <label for="example-text-input" class="col-2 col-form-label">
                Father Full Name
            </label>
            <div class="col-7">
                <input class="form-control m-input" type="text" value="Ahmed Mustfa Hossam" disabled="">
            </div>
        </div>


        <!-- Begin: Nationality -->
        <div class="form-group m-form__group row">
            <label class="col-form-label col-lg-2 col-sm-12">
                Father Nationality
            </label>
            <div class="col-lg-7 col-md-9 col-sm-12">
                <select class="form-control m-select2" id="m_select2_7"  name="param" disabled="">
                    <option></option>
                    <optgroup label="Alaskan/Hawaiian Time Zone">
                        <option value="AK" selected>
                            Egyptian
                        </option>
                    </optgroup>
                    {{--<optgroup label="Pacific Time Zone">
                        <option value="CA">
                            California
                        </option>
                        <option value="NV">
                            Nevada
                        </option>
                        <option value="OR">
                            Oregon
                        </option>
                        <option value="WA">
                            Washington
                        </option>
                    </optgroup>
                    <optgroup label="Mountain Time Zone">
                        <option value="AZ">
                            Arizona
                        </option>
                        <option value="CO">
                            Colorado
                        </option>
                        <option value="ID">
                            Idaho
                        </option>
                        <option value="MT">
                            Montana
                        </option>
                        <option value="NE">
                            Nebraska
                        </option>
                        <option value="NM">
                            New Mexico
                        </option>
                        <option value="ND">
                            North Dakota
                        </option>
                        <option value="UT">
                            Utah
                        </option>
                        <option value="WY">
                            Wyoming
                        </option>
                    </optgroup>
                    <optgroup label="Central Time Zone">
                        <option value="AL">
                            Alabama
                        </option>
                        <option value="AR">
                            Arkansas
                        </option>
                        <option value="IL">
                            Illinois
                        </option>
                        <option value="IA">
                            Iowa
                        </option>
                        <option value="KS">
                            Kansas
                        </option>
                        <option value="KY">
                            Kentucky
                        </option>
                        <option value="LA">
                            Louisiana
                        </option>
                        <option value="MN">
                            Minnesota
                        </option>
                        <option value="MS">
                            Mississippi
                        </option>
                        <option value="MO">
                            Missouri
                        </option>
                        <option value="OK">
                            Oklahoma
                        </option>
                        <option value="SD">
                            South Dakota
                        </option>
                        <option value="TX">
                            Texas
                        </option>
                        <option value="TN">
                            Tennessee
                        </option>
                        <option value="WI">
                            Wisconsin
                        </option>
                    </optgroup>
                    <optgroup label="Eastern Time Zone">
                        <option value="CT">
                            Connecticut
                        </option>
                        <option value="DE">
                            Delaware
                        </option>
                        <option value="FL">
                            Florida
                        </option>
                        <option value="GA">
                            Georgia
                        </option>
                        <option value="IN">
                            Indiana
                        </option>
                        <option value="ME">
                            Maine
                        </option>
                        <option value="MD">
                            Maryland
                        </option>
                        <option value="MA">
                            Massachusetts
                        </option>
                        <option value="MI">
                            Michigan
                        </option>
                        <option value="NH">
                            New Hampshire
                        </option>
                        <option value="NJ">
                            New Jersey
                        </option>
                        <option value="NY">
                            New York
                        </option>
                        <option value="NC">
                            North Carolina
                        </option>
                        <option value="OH">
                            Ohio
                        </option>
                        <option value="PA">
                            Pennsylvania
                        </option>
                        <option value="RI">
                            Rhode Island
                        </option>
                        <option value="SC">
                            South Carolina
                        </option>
                        <option value="VT">
                            Vermont
                        </option>
                        <option value="VA">
                            Virginia
                        </option>
                        <option value="WV">
                            West Virginia
                        </option>
                    </optgroup>--}}
                </select>
            </div>
        </div>


        <!-- Begin: Father Email -->
        <div class="form-group m-form__group row">
            <label for="example-text-input" class="col-2 col-form-label">
                Email
            </label>
            <div class="col-7">
                <input class="form-control m-input" type="email" value="ahmed606@gmail.com" disabled="">
            </div>
        </div>

        <!-- Begin: Father Phone -->
        <div class="form-group m-form__group row">
            <label for="example-text-input" class="col-2 col-form-label">
                Phone
            </label>
            <div class="col-7">
                <input class="form-control m-input" type="number" disabled="" value="0112536844">
            </div>
        </div>

        <!-- Begin: Company -->
        <div class="form-group m-form__group row">
            <label for="example-text-input" class="col-2 col-form-label">
                Company Name
            </label>
            <div class="col-7">
                <input class="form-control m-input" type="text" value="Etisalat Misr" disabled>
            </div>
        </div>



        <!-- Begin: Job -->
        <div class="form-group m-form__group row">
            <label class="col-form-label col-lg-2 col-sm-12">
                Fathe's Job
            </label>
            <div class="col-lg-7 col-md-9 col-sm-12">
                <select class="form-control m-select2" id="m_select2_7"  name="param" disabled="">
                    <option></option>
                    <optgroup label="Alaskan/Hawaiian Time Zone">
                        <option value="AK" selected>
                            Sales Executive
                        </option>
                    </optgroup>
                    {{--<optgroup label="Pacific Time Zone">
                        <option value="CA">
                            California
                        </option>
                        <option value="NV">
                            Nevada
                        </option>
                        <option value="OR">
                            Oregon
                        </option>
                        <option value="WA">
                            Washington
                        </option>
                    </optgroup>
                    <optgroup label="Mountain Time Zone">
                        <option value="AZ">
                            Arizona
                        </option>
                        <option value="CO">
                            Colorado
                        </option>
                        <option value="ID">
                            Idaho
                        </option>
                        <option value="MT">
                            Montana
                        </option>
                        <option value="NE">
                            Nebraska
                        </option>
                        <option value="NM">
                            New Mexico
                        </option>
                        <option value="ND">
                            North Dakota
                        </option>
                        <option value="UT">
                            Utah
                        </option>
                        <option value="WY">
                            Wyoming
                        </option>
                    </optgroup>
                    <optgroup label="Central Time Zone">
                        <option value="AL">
                            Alabama
                        </option>
                        <option value="AR">
                            Arkansas
                        </option>
                        <option value="IL">
                            Illinois
                        </option>
                        <option value="IA">
                            Iowa
                        </option>
                        <option value="KS">
                            Kansas
                        </option>
                        <option value="KY">
                            Kentucky
                        </option>
                        <option value="LA">
                            Louisiana
                        </option>
                        <option value="MN">
                            Minnesota
                        </option>
                        <option value="MS">
                            Mississippi
                        </option>
                        <option value="MO">
                            Missouri
                        </option>
                        <option value="OK">
                            Oklahoma
                        </option>
                        <option value="SD">
                            South Dakota
                        </option>
                        <option value="TX">
                            Texas
                        </option>
                        <option value="TN">
                            Tennessee
                        </option>
                        <option value="WI">
                            Wisconsin
                        </option>
                    </optgroup>
                    <optgroup label="Eastern Time Zone">
                        <option value="CT">
                            Connecticut
                        </option>
                        <option value="DE">
                            Delaware
                        </option>
                        <option value="FL">
                            Florida
                        </option>
                        <option value="GA">
                            Georgia
                        </option>
                        <option value="IN">
                            Indiana
                        </option>
                        <option value="ME">
                            Maine
                        </option>
                        <option value="MD">
                            Maryland
                        </option>
                        <option value="MA">
                            Massachusetts
                        </option>
                        <option value="MI">
                            Michigan
                        </option>
                        <option value="NH">
                            New Hampshire
                        </option>
                        <option value="NJ">
                            New Jersey
                        </option>
                        <option value="NY">
                            New York
                        </option>
                        <option value="NC">
                            North Carolina
                        </option>
                        <option value="OH">
                            Ohio
                        </option>
                        <option value="PA">
                            Pennsylvania
                        </option>
                        <option value="RI">
                            Rhode Island
                        </option>
                        <option value="SC">
                            South Carolina
                        </option>
                        <option value="VT">
                            Vermont
                        </option>
                        <option value="VA">
                            Virginia
                        </option>
                        <option value="WV">
                            West Virginia
                        </option>
                    </optgroup>--}}
                </select>
            </div>
        </div>




        <!--------------------------- Begin: Emergency Info ------------------------>
        <div class="m-form__seperator m-form__seperator--dashed m-form__seperator--space-2x"></div>
        <div class="form-group m-form__group row">
            <div class="col-10 ml-auto">
                <h3 class="m-form__section">
                    4. Emergency Info
                </h3>
            </div>
        </div>

        <!-- Begin: Person Name  -->
        <div class="form-group m-form__group row">
            <label for="example-text-input" class="col-2 col-form-label">
                First Person Name
            </label>
            <div class="col-7">
                <input class="form-control m-input" type="text" value="Ahmed Mustfa Hossam" disabled="">
            </div>
        </div>


        <!-- Begin: Relation To Child  -->
        <div class="form-group m-form__group row">
            <label for="example-text-input" class="col-2 col-form-label">
                Relation To Child
            </label>
            <div class="col-7">
                <input class="form-control m-input" type="text" value="Uncle" disabled="">
            </div>
        </div>


        <!-- Begin: Person Mobile  -->
        <div class="form-group m-form__group row">
            <label for="example-text-input" class="col-2 col-form-label">
                Mobile
            </label>
            <div class="col-7">
                <input class="form-control m-input" type="number" value="0152336944" disabled="">
            </div>
        </div>


        <!-- Begin: Person Mobile  -->
        <div class="form-group m-form__group row">
            <label for="example-text-input" class="col-2 col-form-label">
                Home NO
            </label>
            <div class="col-7">
                <input class="form-control m-input" type="number" value="002369588" disabled="">
            </div>
        </div>


        <!--------------------------- Begin: Other Children Info ------------------------>
        <div class="m-form__seperator m-form__seperator--dashed m-form__seperator--space-2x"></div>
        <div class="form-group m-form__group row">
            <div class="col-10 ml-auto">
                <h3 class="m-form__section">
                    5. Other Children Info
                </h3>
            </div>
        </div>

        <!-- Begin: Child Name  -->
        <div class="form-group m-form__group row">
            <label for="example-text-input" class="col-2 col-form-label">
                Child Name
            </label>
            <div class="col-7">
                <input class="form-control m-input" type="text" value="Mohamed Ahmed Mustfa Hossam" disabled="">
            </div>
        </div>


        <!-- Begin:  Child Age -->
        <div class="form-group m-form__group row">
            <label for="example-text-input" class="col-2 col-form-label">
                Child Age
            </label>
            <div class="col-7">
                <input class="form-control m-input" type="text" value="12" disabled="">
            </div>
        </div>


        <!-- Begin: Person Mobile  -->
        <div class="form-group m-form__group row">
            <label for="example-text-input" class="col-2 col-form-label">
                School/University Name
            </label>
            <div class="col-7">
                <input class="form-control m-input" type="text" value="BISC" disabled="">
            </div>
        </div>



        <!-- Begin: Gender -->
        <div class="form-group m-form__group row">
            <label class="col-form-label col-lg-2 col-sm-12">
                Gender
            </label>
            <div class="col-lg-7 col-md-9 col-sm-12">
                <select class="form-control m-select2" id="m_select2_7"  name="param" disabled="">
                    <option></option>
                    <optgroup label="Alaskan/Hawaiian Time Zone">
                        <option value="AK" selected>
                            Male
                        </option>
                    </optgroup>
                    {{--<optgroup label="Pacific Time Zone">
                        <option value="CA">
                            California
                        </option>
                        <option value="NV">
                            Nevada
                        </option>
                        <option value="OR">
                            Oregon
                        </option>
                        <option value="WA">
                            Washington
                        </option>
                    </optgroup>
                    <optgroup label="Mountain Time Zone">
                        <option value="AZ">
                            Arizona
                        </option>
                        <option value="CO">
                            Colorado
                        </option>
                        <option value="ID">
                            Idaho
                        </option>
                        <option value="MT">
                            Montana
                        </option>
                        <option value="NE">
                            Nebraska
                        </option>
                        <option value="NM">
                            New Mexico
                        </option>
                        <option value="ND">
                            North Dakota
                        </option>
                        <option value="UT">
                            Utah
                        </option>
                        <option value="WY">
                            Wyoming
                        </option>
                    </optgroup>
                    <optgroup label="Central Time Zone">
                        <option value="AL">
                            Alabama
                        </option>
                        <option value="AR">
                            Arkansas
                        </option>
                        <option value="IL">
                            Illinois
                        </option>
                        <option value="IA">
                            Iowa
                        </option>
                        <option value="KS">
                            Kansas
                        </option>
                        <option value="KY">
                            Kentucky
                        </option>
                        <option value="LA">
                            Louisiana
                        </option>
                        <option value="MN">
                            Minnesota
                        </option>
                        <option value="MS">
                            Mississippi
                        </option>
                        <option value="MO">
                            Missouri
                        </option>
                        <option value="OK">
                            Oklahoma
                        </option>
                        <option value="SD">
                            South Dakota
                        </option>
                        <option value="TX">
                            Texas
                        </option>
                        <option value="TN">
                            Tennessee
                        </option>
                        <option value="WI">
                            Wisconsin
                        </option>
                    </optgroup>
                    <optgroup label="Eastern Time Zone">
                        <option value="CT">
                            Connecticut
                        </option>
                        <option value="DE">
                            Delaware
                        </option>
                        <option value="FL">
                            Florida
                        </option>
                        <option value="GA">
                            Georgia
                        </option>
                        <option value="IN">
                            Indiana
                        </option>
                        <option value="ME">
                            Maine
                        </option>
                        <option value="MD">
                            Maryland
                        </option>
                        <option value="MA">
                            Massachusetts
                        </option>
                        <option value="MI">
                            Michigan
                        </option>
                        <option value="NH">
                            New Hampshire
                        </option>
                        <option value="NJ">
                            New Jersey
                        </option>
                        <option value="NY">
                            New York
                        </option>
                        <option value="NC">
                            North Carolina
                        </option>
                        <option value="OH">
                            Ohio
                        </option>
                        <option value="PA">
                            Pennsylvania
                        </option>
                        <option value="RI">
                            Rhode Island
                        </option>
                        <option value="SC">
                            South Carolina
                        </option>
                        <option value="VT">
                            Vermont
                        </option>
                        <option value="VA">
                            Virginia
                        </option>
                        <option value="WV">
                            West Virginia
                        </option>
                    </optgroup>--}}
                </select>
            </div>

        </div>



        <!--------------------------- Begin: Previous Schools------------------------>
        <div class="m-form__seperator m-form__seperator--dashed m-form__seperator--space-2x"></div>
        <div class="form-group m-form__group row">
            <div class="col-10 ml-auto">
                <h3 class="m-form__section">
                    6. Previous Schools Information
                </h3>
            </div>
        </div>

        <!-- Begin: School Name  -->
        <div class="form-group m-form__group row">
            <label for="example-text-input" class="col-2 col-form-label">
                School/Nursery Name
            </label>
            <div class="col-7">
                <input class="form-control m-input" type="text" value="Mohamed Ahmed Mustfa Hossam" disabled="">
            </div>
        </div>


        <!-- Begin:  Child Curriculum -->
        <div class="form-group m-form__group row">
            <label for="example-text-input" class="col-2 col-form-label">
                Curriculum
            </label>
            <div class="col-7">
                <input class="form-control m-input" type="text" value="American" disabled="">
            </div>
        </div>


        <!-- Begin: Gender -->
        <div class="form-group m-form__group row">
            <label class="col-form-label col-lg-2 col-sm-12">
                Grade
            </label>
            <div class="col-lg-7 col-md-9 col-sm-12">
                <select class="form-control m-select2" id="m_select2_7"  name="param" disabled="">
                    <option></option>
                    <optgroup label="Alaskan/Hawaiian Time Zone">
                        <option value="AK" selected>
                            Pre-F
                        </option>
                    </optgroup>
                    {{--<optgroup label="Pacific Time Zone">
                        <option value="CA">
                            California
                        </option>
                        <option value="NV">
                            Nevada
                        </option>
                        <option value="OR">
                            Oregon
                        </option>
                        <option value="WA">
                            Washington
                        </option>
                    </optgroup>
                    <optgroup label="Mountain Time Zone">
                        <option value="AZ">
                            Arizona
                        </option>
                        <option value="CO">
                            Colorado
                        </option>
                        <option value="ID">
                            Idaho
                        </option>
                        <option value="MT">
                            Montana
                        </option>
                        <option value="NE">
                            Nebraska
                        </option>
                        <option value="NM">
                            New Mexico
                        </option>
                        <option value="ND">
                            North Dakota
                        </option>
                        <option value="UT">
                            Utah
                        </option>
                        <option value="WY">
                            Wyoming
                        </option>
                    </optgroup>
                    <optgroup label="Central Time Zone">
                        <option value="AL">
                            Alabama
                        </option>
                        <option value="AR">
                            Arkansas
                        </option>
                        <option value="IL">
                            Illinois
                        </option>
                        <option value="IA">
                            Iowa
                        </option>
                        <option value="KS">
                            Kansas
                        </option>
                        <option value="KY">
                            Kentucky
                        </option>
                        <option value="LA">
                            Louisiana
                        </option>
                        <option value="MN">
                            Minnesota
                        </option>
                        <option value="MS">
                            Mississippi
                        </option>
                        <option value="MO">
                            Missouri
                        </option>
                        <option value="OK">
                            Oklahoma
                        </option>
                        <option value="SD">
                            South Dakota
                        </option>
                        <option value="TX">
                            Texas
                        </option>
                        <option value="TN">
                            Tennessee
                        </option>
                        <option value="WI">
                            Wisconsin
                        </option>
                    </optgroup>
                    <optgroup label="Eastern Time Zone">
                        <option value="CT">
                            Connecticut
                        </option>
                        <option value="DE">
                            Delaware
                        </option>
                        <option value="FL">
                            Florida
                        </option>
                        <option value="GA">
                            Georgia
                        </option>
                        <option value="IN">
                            Indiana
                        </option>
                        <option value="ME">
                            Maine
                        </option>
                        <option value="MD">
                            Maryland
                        </option>
                        <option value="MA">
                            Massachusetts
                        </option>
                        <option value="MI">
                            Michigan
                        </option>
                        <option value="NH">
                            New Hampshire
                        </option>
                        <option value="NJ">
                            New Jersey
                        </option>
                        <option value="NY">
                            New York
                        </option>
                        <option value="NC">
                            North Carolina
                        </option>
                        <option value="OH">
                            Ohio
                        </option>
                        <option value="PA">
                            Pennsylvania
                        </option>
                        <option value="RI">
                            Rhode Island
                        </option>
                        <option value="SC">
                            South Carolina
                        </option>
                        <option value="VT">
                            Vermont
                        </option>
                        <option value="VA">
                            Virginia
                        </option>
                        <option value="WV">
                            West Virginia
                        </option>
                    </optgroup>--}}
                </select>
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
                More About Child
            </label>
            <div class="col-lg-7 col-md-9 col-sm-12">
                <textarea class="form-control m-input" id="exampleTextarea" rows="3" disabled style="resize: none">Mohamed is very lazy and aggressive</textarea>

            </div>
        </div>


        <!-- Begin: Why Choosing New Discovery -->
        <div class="form-group m-form__group row">
            <label class="col-form-label col-lg-2 col-sm-12">
                Why Choosing New Discovery
            </label>
            <div class="col-lg-7 col-md-9 col-sm-12">
                <textarea class="form-control m-input" id="exampleTextarea" rows="3" disabled style="resize: none">New Discovery is very beautiful school</textarea>
            </div>
        </div>


        <!-- Begin: Gender -->
        <div class="form-group m-form__group row">
            <label class="col-form-label col-lg-2 col-sm-12">
                Parent status
            </label>
            <div class="col-lg-7 col-md-9 col-sm-12">
                <select class="form-control m-select2" id="m_select2_7"  name="param" disabled="">
                    <option></option>
                    <optgroup label="Alaskan/Hawaiian Time Zone">
                        <option value="AK" selected>
                            Married
                        </option>
                    </optgroup>
                    {{--<optgroup label="Pacific Time Zone">
                        <option value="CA">
                            California
                        </option>
                        <option value="NV">
                            Nevada
                        </option>
                        <option value="OR">
                            Oregon
                        </option>
                        <option value="WA">
                            Washington
                        </option>
                    </optgroup>
                    <optgroup label="Mountain Time Zone">
                        <option value="AZ">
                            Arizona
                        </option>
                        <option value="CO">
                            Colorado
                        </option>
                        <option value="ID">
                            Idaho
                        </option>
                        <option value="MT">
                            Montana
                        </option>
                        <option value="NE">
                            Nebraska
                        </option>
                        <option value="NM">
                            New Mexico
                        </option>
                        <option value="ND">
                            North Dakota
                        </option>
                        <option value="UT">
                            Utah
                        </option>
                        <option value="WY">
                            Wyoming
                        </option>
                    </optgroup>
                    <optgroup label="Central Time Zone">
                        <option value="AL">
                            Alabama
                        </option>
                        <option value="AR">
                            Arkansas
                        </option>
                        <option value="IL">
                            Illinois
                        </option>
                        <option value="IA">
                            Iowa
                        </option>
                        <option value="KS">
                            Kansas
                        </option>
                        <option value="KY">
                            Kentucky
                        </option>
                        <option value="LA">
                            Louisiana
                        </option>
                        <option value="MN">
                            Minnesota
                        </option>
                        <option value="MS">
                            Mississippi
                        </option>
                        <option value="MO">
                            Missouri
                        </option>
                        <option value="OK">
                            Oklahoma
                        </option>
                        <option value="SD">
                            South Dakota
                        </option>
                        <option value="TX">
                            Texas
                        </option>
                        <option value="TN">
                            Tennessee
                        </option>
                        <option value="WI">
                            Wisconsin
                        </option>
                    </optgroup>
                    <optgroup label="Eastern Time Zone">
                        <option value="CT">
                            Connecticut
                        </option>
                        <option value="DE">
                            Delaware
                        </option>
                        <option value="FL">
                            Florida
                        </option>
                        <option value="GA">
                            Georgia
                        </option>
                        <option value="IN">
                            Indiana
                        </option>
                        <option value="ME">
                            Maine
                        </option>
                        <option value="MD">
                            Maryland
                        </option>
                        <option value="MA">
                            Massachusetts
                        </option>
                        <option value="MI">
                            Michigan
                        </option>
                        <option value="NH">
                            New Hampshire
                        </option>
                        <option value="NJ">
                            New Jersey
                        </option>
                        <option value="NY">
                            New York
                        </option>
                        <option value="NC">
                            North Carolina
                        </option>
                        <option value="OH">
                            Ohio
                        </option>
                        <option value="PA">
                            Pennsylvania
                        </option>
                        <option value="RI">
                            Rhode Island
                        </option>
                        <option value="SC">
                            South Carolina
                        </option>
                        <option value="VT">
                            Vermont
                        </option>
                        <option value="VA">
                            Virginia
                        </option>
                        <option value="WV">
                            West Virginia
                        </option>
                    </optgroup>--}}
                </select>
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
