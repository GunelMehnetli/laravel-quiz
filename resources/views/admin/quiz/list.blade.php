<x-app-layout>
    <x-slot name="header">Quizlər </x-slot>
    <div class="card">
        <div class="card-body">
            <a href="{{ route('quizzes.create') }}" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i> Quiz
                yarad</a>
            <table class="table table-bordered mt-3">
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
                            <td class="d-flex justify-content-center">
                                <a href="{{ route('questions.index', $quiz->id) }}"
                                    class="btn btn-sm  btn-warning mr-2"><i class="fa fa-question"></i></a>
                                <a href="{{ route('quizzes.edit', $quiz->id) }}" class="btn btn-sm  btn-primary mr-2"><i
                                        class="fa fa-pen"></i></a>
                                <form method="POST" action="{{ route('quizzes.destroy', $quiz->id) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger"><i
                                            class="fa fa-times"></i></button>
                                </form>


                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $quizzes->links() }}
        </div>
    </div>
</x-app-layout>
