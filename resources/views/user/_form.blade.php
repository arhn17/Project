<label for="name">Nama</label>   
<div class="form-group">
    <div class="form-line">
        {{ Form::text('name', null, ['class' => 'form-control'])}}
    </div>
</div>

<label for="email">Email</label>    
<div class="form-group">
    <div class="form-line">
        {{ Form::text('email', null, ['class' => 'form-control'])}}
    </div>
</div>

<label for="username">Password</label>
<div class="form-group">
    <div class="form-line">
        {{ Form::input('password', 'password', null, ['class' => 'form-control'])}}
    </div>
</div>   

<div class="form-group">
    <label for="role">Role</label>
    {{ Form::select('role',$roles, null, ['class' => 'form-control'])}}
</div>

<div class="form-group">
    <label for="role">Role</label>
    {{ Form::select('status',config('value.status_user'), null, ['class' => 'form-control'])}}
</div>
