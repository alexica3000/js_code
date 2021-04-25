<?php

Route::get('tasks/page/{page}', [TaskController::class, 'index'])->name('tasks.index.page');
