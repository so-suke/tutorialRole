@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">Dashboard</div>

        <div class="card-body">
          @if (session('status'))
          <div class="alert alert-success" role="alert">
            {{ session('status') }}
          </div>
          @endif

          <p>あなたは{{ $role }}です。</p>

          {{-- <a class="btn btn-primary" href="/runSystemFunc">押せるかな？</a> --}}
          <a class="btn btn-primary" href="{{ route('posts.create') }}">ポスト作成</a>

          {{-- @can('system-only')
          <button>システム管理者専用ボタン</button>
          @endcan
          @can('admin-higher')
          <button>管理者専用ボタン</button>
          @endcan
          @can('user-higher')
          <button>ユーザーボタン</button>
          @endcan --}}
        </div>
      </div>
    </div>
  </div>
</div>
@endsection