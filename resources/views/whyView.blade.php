<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Why </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-4">
  
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif




    <h3 class="mt-4">Existing Why Sections</h3>
    <table class="table table-bordered mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Developer ID</th>
                <th>Why Section 1</th>
                <th>Image 1</th>
                <th>Why Section 2</th>
                <th>Image 2</th>
                <th>Why Section 3</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($whySections as $why)
            <tr>
                <td>{{ $why->id }}</td>
                <td>{{ $why->developer_id }}</td>
                <td>{{ $why->why_section1 }}</td>
                <td>
                    @if ($why->why_1_image)
                        <img src="{{ asset('storage/' . $why->why_1_image) }}" width="50">
                    @else
                        No Image
                    @endif
                </td>
                <td>{{ $why->why_section2 }}</td>
                <td>
                    @if ($why->why_2_image)
                        <img src="{{ asset('storage/' . $why->why_2_image) }}" width="50">
                    @else
                        No Image
                    @endif
                </td>
                <td>{{ $why->why_section3 }}</td>
                <td>
                    <form action="{{ url('why/' . $why->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</body>
</html>
