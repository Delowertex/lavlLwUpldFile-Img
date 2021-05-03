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
                    <div class="card">
                    @if(session()->has('message'))
                        <div class="alert alert-success">
                            {{session('message')}}
                        </div>
                    @endif
                        <div class="card-header">
                            <h3>File Upload</h3>
                        </div>
                        <div class="card-body">
                            <form wire:submit.prevent="uploadImages" action="" form-id="upload-image" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="images">Choose Images</label>
                                    <input type="file" class="form-control" id="images" name="images" wire:model="images" multiple>
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
