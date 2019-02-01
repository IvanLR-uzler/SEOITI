<div class="center">
        <h3>Listado de preguntas</h3>
        <div class="form-group">
                <ul class="list-unstyled">
                        @foreach ($questions as $question)
                            <li>
                                    <label>
                                        {{ Form::checkbox('questions[]', $question->id, null,['class' => 'correctAns']) }}
                                        {{ $question->context }}
                                        <em>Reactivos ({{ $question->reactive ?: 'N/A' }})</em>
                                    </label>
                            </li>
                        @endforeach
                </ul>
                <div class="form-group">
                        {{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
                </div>
        </div>
</div>
