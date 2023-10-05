<x-app-layout>
    <x-slot name="header">Quizlər </x-slot>
    <div class="card">
        <div class="card-body">
            <a href="{{ route('quizzes.create') }}" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i> Quiz
                yarad</a>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">Quiz</th>
                        <th scope="col">Vəziyyət</th>
                        <th scope="col">Bitmə tarixi</th>
                        <th scope="col">Əməliyyatlar</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($quizzes as $quiz)
                        <tr>
                            <th scope="row">{{ $quiz->title }}</th>
                            <td>{{ $quiz->status }}</td>
                            <td>{{ $quiz->finished_at }}</td>
                            <td>
                                <a href="#" class="btn btn-sm  btn-primary"><i class="fa fa-pen"></i></a>
                                <a href="#" class="btn btn-sm  btn-danger"><i class="fa fa-times"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $quizzes->links() }}
        </div>
    </div>
</x-app-layout>
