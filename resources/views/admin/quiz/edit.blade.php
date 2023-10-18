<x-app-layout>
    <x-slot name="header">Quiz Güncəllə</x-slot>
    <div class="card">
        <div class="card-body">
            <form method="Post" action="{{ route('quizzes.update', $quiz->id) }}">
                @method('PUT')
                @csrf
                <div class="form-group mb-3">
                    <label>Quiz Başlığı</label>
                    <input type="text" name="title" class="form-control" value="{{ $quiz->title }}">
                </div>

                <div class="form-group mb-3">
                    <label>Quiz Açıqlama</label>
                    <textarea name="description" class="form-control" row="4">{{ $quiz->description }}</textarea>
                </div>

                <div class="form-group mb-3">
                    <input type="checkbox" id="isFinished" @if ($quiz->finished_at) checked @endif>
                    <label>Bitmə tarixi əlavə etmək istəyirsiniz?</label>
                </div>

                <div id="finishedInput" @if (!$quiz->finished_at) style="display:none;" @endif
                    class="form-group mb-3">
                    <label>Bitmə tarixi</label>
                    <input type="datetime-local" name="finished_at" class="form-control"
                        @if ($quiz->finished_at) value="{{ date('Y-m-d\TH:i', strtotime($quiz->finished_at)) }}" @endif>
                </div>

                <div class="form-group d-grid gap-2">
                    <button type="submit" class="btn btn-success "
                        style="text-color: green; background-color:green;">Quiz Güncəllə</button>
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
