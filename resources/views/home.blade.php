<div class="content">
    <div class="row">
        <div class="col-md-10">
            <form id="keep" action="new" method="post">
                <div class="form-group">
                    <label for="keep-text">Paste Text</label>
                    <textarea class="form-control" rows="10" id="keep-text"></textarea>
                </div>
                <fieldset class="col-md-6 form-horizontal">
                    <legend>Optional Settings</legend>
                    <div class="form-group">
                        <label for="language" class="control-label col-md-5">Highlight Language</label>
                        <div class="col-md-7">
                            <select name="language" class="form-control selectpicker" data-live-search="true">
                                <option value="text">Text</option>
                                <option value="c">C</option>
                                <option value="cpp">C++</option>
                                <option value="php">PHP</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="expiration" class="control-label col-md-5">Expiration</label>
                        <div class="col-md-7">
                            <select name="expiration" class="form-control selectpicker">
                                <option value="10m">10 Minutes</option>
                                <option value="30m">30 Minutes</option>
                                <option value="1h">1 Hour</option>
                                <option value="5h">5 Hours</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exposure" class="control-label col-md-5">Exposure</label>
                        <div class="col-md-7">
                            <select name="exposure" class="form-control selectpicker">
                                <option value="public">Public</option>
                                <option value="private" disabled>Private</option>
                                <option value="unlisted">Unlisted</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name" class="control-label col-md-5">Name</label>
                        <div class="col-md-7">
                            <input type="text" placeholder="Name" class="form-control" name="name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name" class="control-label col-md-5"></label>
                        <div class="col-md-7">
                            <input type="submit" class="form-control btn btn-info" name="submit" value="Save">
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
        <div class="col-md-2">
            //Side Bar
        </div>
    </div>
</div>