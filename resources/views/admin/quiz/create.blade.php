<x-app-layout>
    <x-slot name="header">Quiz Yarat</x-slot>
    <div class="card">
        <div class="card-body">
            <form method="Post" action="{{ route('quizzes.store') }}">
                @csrf
                <div class="form-group mb-3">
                    <label>Quiz Başlığı</label>
                    <input type="text" name="title" class="form-control" value="{{ old('title') }}">
                </div>

                <div class="form-group mb-3">
                    <label>Quiz Açıqlama</label>
                    <textarea name="description" class="form-control" row="4">{{ old('description') }}</textarea>
                </div>

                <div class="form-group mb-3">
                    <input type="checkbox" id="isFinished" @if (old('finished_at')) checked @endif>
                    <label>Bitmə tarixi əlavə etmək istəyirsiniz?</label>
                </div>

                <div id="finishedInput" @if (!old('finished_at')) style="display:none;" @endif
                    class="form-group mb-3">
                    <label>Bitmə tarixi</label>
                    <input type="datetime-local" name="finished_at" class="form-control"
                        value="{{ old('finished_at') }}">
                </div>

                <div class="form-group d-grid gap-2">
                    <button type="submit" class="btn btn-success "
                        style="text-color: green; background-color:green;">Quiz Yarad</button>
                </div>
            </form>
        </div>
    </div>
    <script>
        $('#isFinished').change(function() {
            if ($('#isFinished').is(':checked')) {
                $('#finishedInput').show();
            } else {
                $('#finishedInput').hide();
            }
        })
    </script>
</x-app-layout>
