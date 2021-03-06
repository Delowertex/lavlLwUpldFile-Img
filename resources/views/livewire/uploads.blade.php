<div>
<style>
    .float-right {
    margin-left: 525px;
    margin-top: 17px;
}
</style>
    <section style="padding-top: 60px">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                @if(session()->has('message'))
                    <div class="alert alert-success">
                        {{session('message')}}
                    </div>
                @endif
                    <div class="card">
                        <div class="card-header">
                            <h3>File Upload</h3>
                        </div>
                        <div class="card-body">
                            <form wire:submit.prevent="fileUpload" action="" id="form-upload" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="text" class="form-control" name="title" id="title" wire:model="title">
                                    @error('title') <span class="text-danger">{{$message}}</span>@enderror
                                </div>
                                <div class="form-group">
                                    <label for="filename">File</label>
                                    <input type="file" class="form-control" name="filename" id="filename" wire:model="filename">
                                    @error('filename') <span class="text-danger">{{$message}}</span>@enderror
                                </div>
                                <button type="submit" class="btn btn-success float-right">Upload</button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
</div>

