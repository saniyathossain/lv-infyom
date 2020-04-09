<li class="{{ Request::is('companies*') ? 'active' : '' }}">
    <a href="{{ route('companies.index') }}"><i class="fa fa-edit"></i><span>Companies</span></a>
</li>

<li class="{{ Request::is('education*') ? 'active' : '' }}">
    <a href="{{ route('education.index') }}"><i class="fa fa-edit"></i><span>Education</span></a>
</li>

<li class="{{ Request::is('institutes*') ? 'active' : '' }}">
    <a href="{{ route('institutes.index') }}"><i class="fa fa-edit"></i><span>Institutes</span></a>
</li>

