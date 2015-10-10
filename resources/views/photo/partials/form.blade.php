{!! Form::label('image', 'Image:') !!}<br/>
{!! Form::file('image', null) !!}<br/>
{!! Form::label('title', 'Title:') !!}<br/>
{!! Form::text('title', null) !!}<br/>
{!! Form::label('description', 'Description:') !!}<br/>
{!! Form::textarea('description') !!}<br/>
{!! Form::label('user_id', 'User:') !!}<br/>
{!! Form::select('user_id', $users, 0) !!}<br/><br/>
{!! Form::submit('Send', null) !!}<br/>