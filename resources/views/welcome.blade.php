<table>
    <thead>
        <th>name</th>
        <th>email</th>
    </thead>
    <tbody>

    </tbody>
</table>

<form action="/post" method="post">
    @csrf
    <input type="file" name="file"/>
    <input type="submit" value="kirim"/>
</form>