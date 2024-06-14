<!DOCTYPE html>
<html>
<head>
    <title>Edit Customer</title>
</head>
<body>
    <h1>Edit Customer</h1>
    <form action="{{ route('customer.update', $customer->id) }}" method="POST">
        @csrf
        @method('PUT')

            <label for="name">Name:</label>
            <input type="text" name="name" value="{{old('Name:',$customer->name)}}">

            <label for="last_name">Apellido:</label>
            <input type="text" name="last_name" value="{{old('Last Name:',$customer->last_name)}}" >

            <label for="age">Edad:</label>
            <input type="number" name="age" value="{{old('Age:',$customer->age)}}" >

        <button type="submit">Save Changes</button>
    </form>

</body>
</html>
