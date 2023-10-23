<x-app-layout>
    <x-slot name="header">{{ $quiz->title }} Quizinə aid suallar</x-slot>
    <div class="card">
        <div class="card-body">
            <a href="{{ route('questions.create', $quiz->id) }}" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i>
                Sual
                yarad</a>
            <table class="table table-bordered mt-3">
                <thead>
                    <tr>
                        <th scope="col">Sual</th>
                        <th scope="col">Şəkil</th>
                        <th scope="col">1. Cavab</th>
                        <th scope="col">2. Cavab</th>
                        <th scope="col">3. Cavab</th>
                        <th scope="col">4. Cavab</th>
                        <th scope="col">Doğru cavab</th>
                        <th scope="col">Əməliyyatlar</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($quiz->questions as $question)
                        <tr>
                            <th scope="row">{{ $question->question }}</th>
                            <td>{{ $question->image }}</td>
                            <td>{{ $question->answer1 }}</td>
                            <td>{{ $question->answer2 }}</td>
                            <td>{{ $question->answer3 }}</td>
                            <td>{{ $question->answer4 }}</td>
                            <td class="text-success">{{ substr($question->correct_answer, -1) }}. Cavab</td>
                            {{--  <td class="d-flex justify-content-center">
                                <a href="{{ route('quizzes.edit', $question->id) }}"
                                    class="btn btn-sm  btn-primary mr-2"><i class="fa fa-pen"></i></a>
                                <form method="POST" action="{{ route('quizzes.destroy', $quiz->id) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger"><i
                                            class="fa fa-times"></i></button>
                                </form>


                            </td> --}}
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>
</x-app-layout>
