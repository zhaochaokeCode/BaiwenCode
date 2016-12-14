/*===== Ajax请求 =====*/
function AjaxRequest(url, data, callBack) {
    $.ajax({
        url: url,
        type: 'POST',
        timeout: 200000,
        data: data,
        success: function (result) {
            callBack(result);
        }
    });
}
function AjaxRequest_GET(url, callBack) {
    $.ajax({
        url: url,
        type: 'GET',
        timeout: 200000,
        success: function (result) {
            callBack(result);
        }
    });
}
function AjaxRequestAll(url, data, before, callBack) {
    $.ajax({
        url: url,
        type: 'POST',
        data: data,
        beforeSend: function (result) {
            before(result);
        },
        success: function (result) {
            callBack(result);
        }
    });
}

function AjaxRequestParseJson(url, data, callBack) {
    $.ajax({
        url: url,
        type: 'POST',
        data: data,
        success: function (result) {
            var obj = jQuery.parseJSON(result);
            callBack(obj);
        }
    });
}

function AjaxRequestParseJson(url, data, before, callBack) {
    $.ajax({
        url: url,
        type: 'POST',
        data: data,
        success: function (result) {
            var obj = jQuery.parseJSON(result);
            callBack(obj);
        },
        beforeSend: function (result) {
            var obj = jQuery.parseJSON(result);
            before(obj);
        }
    });
}

/*同步Ajax请求*/
function AjaxRequestSync(url, data, callBack) {
    $.ajax({
        async: false,
        type: 'POST',
        url: url,
        data: data,
        success: function (result) {
            callBack(result);
        }
    });
}

function AjaxAsyncRequest(url, data, callBack) {
    $.ajax({
        async: false,
        url: url,
        data: data,
        success: function (result) {
            callBack(result);
        }
    });
}

function getQueryStringByName(name) {

    var result = location.search.match(new RegExp("[\?\&]" + name + "=([^\&]+)", "i"));
    if (result == null || result.length < 1) {
        return "";
    }
    return result[1];
}