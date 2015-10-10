{!! Form::label('username', 'Username:') !!}<br/>
{!! Form::text('username', null) !!}<br/>
{!! Form::label('email', 'Email:') !!}<br/>
{!! Form::text('email', null, ['type' => 'email']) !!}<br/>
{!! Form::label('password', 'Password:') !!}<br/>
{!! Form::password('password') !!}<br/><br/>
{!! Form::submit('Send', null) !!}<br/>