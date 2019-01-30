<div class="float-left">
        <h3>Listado de preguntas</h3>
        <div class="form-group">
                <ul class="list-unstyled">
                        @foreach ($questions as $question)
                            <li>
                                    <label>
                                        {{ Form::checkbox('questions[]', $question->id, null) }}
                                        {{ $question->context }}
                                        <em>Reactivos ({{ $question->reactive ?: 'N/A' }})</em>
                                    </label>
                            </li>
                        @endforeach
                </ul>
        </div>
</div>
