<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>403 Forbidden</title>
</head>

<body>
  <div class="error-wrap">
    <section>
      <h1>403 Forbidden</h1>
      @if ($exception->getMessage() === '')
      <p>You do not have access.</p>
      @else
      <p>Error message: {{ $exception->getMessage() }} </p>
      @endif
    </section>
  </div>
</body>

</html>