<div class="form-group">
{!! Form::label('name', 'Name') !!}
{!! Form::text('name', null,
    ['class' => 'form-control','id' => 'name','name' => 'name','placeholder'=>'Enter name']) !!}
</div>

<div class="form-group">
{!! Form::label('email', 'Email') !!}
{!! Form::email('email', null, ['class' => 'form-control','name'=>'email','id'=>'email','placeholder' => 'eg: foo@bar.com']) !!}
</div>

<div class="form-group">
{!! Form::label('dob', 'Date of Birth') !!}
{!! Form::date('date', null, ['class' => 'form-control','id'=>'dob','name'=>'dob']) !!}
</div>

<div class="form-group">
{!! Form::label('address', 'Address') !!}
{!! Form::textarea('address', null, ['class' => 'form-control','name' => 'address', 'id' => 'address', 'rows' => 2, 'cols' => 40 ]) !!}
</div>

<div>
    {!! Form::label('country', 'Country : ') !!}
    {!! Form::select('country',[' ','india'=>'India','germany'=>'Germany','canada'=>'Canada'], 'null', ['class' => 'form-control country']) !!}
</div>

<div>
    {!! Form::label('state', 'State : ') !!}
    {!! Form::select('state',[' '], 'null', ['class' => 'form-control state']) !!}
</div>

<br>

<div class="form-group">
    <div class="checkbox">
        {!! Form::label('hobby', 'Hobby : ') !!}
        {!! Form::checkbox('hobby', 'Drawing', null, ['id' => 'hobby','name'=>'hobby[]']) !!} Drawing
        {!! Form::checkbox('hobby', 'Painting', null, ['id' => 'hobby','name'=>'hobby[]']) !!} Painting
    </div>
</div>


<br>


<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>


{{-- <option value="0"> </option><option value="india">India</option><option value="germany">Germany</option><option value="canada">Canada</option> --}}
<script>

    //datatable

    // $(document).ready( function () {
    // $('#table_id').DataTable();
    // } );

    //dropdown dependency
    $(document).ready(function(){
       $(".country").change(function(){
        //    var a = $(".country").html();
        //    console.log(a);
        switch($(this).val()){
            case 'india':
                $(".state").html("<option value=' '></option> <option value='dnh'>DNH</option> <option value='gujarat'>Gujarat</option> <option value='maharashtra'>Maharashtra</option>");
                break;
            case 'germany':
                $(".state").html("<option value=' '></option> <option value='bavaria'>Bavaria</option> <option value='hessen'>Hessen</option> <option value='saarland'>Saarland</option>");
                break;
            case 'canada':
                $(".state").html("<option value=' '></option> <option value='alberta'>Alberta</option> <option value='manitoba'>Manitoba</option> <option value='yukon'>Yukon</option>");
                break;
            default:
            $(".state").html("<option value='0'>choose anyone</option>");
        }
       });
    });
</script>
