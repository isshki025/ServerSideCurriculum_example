$(function () {
  //この中に、すべてのコードを書いていきます。
  $('select[name="question"]').change(function () {
    var value = "";

    value = $(this).val();
    console.log(value);

    $.ajax("int.php", {
      type: "get",
      data: { val: value },
      datatype: "json"
    })
    .done(function (data) {
      //ここにPHPからの返答があった場合の処理を書きます。
      console.log(data);
      $('select[name="answer"] > option').remove();
      data.forEach(function (times) {
        $('select[name="answer"]').append(
          $("<option>")
            .val(times)
            .text(times)
        );
      });
    })
    .fail(function () {
      //ここにPHPからの返答があった場合の処理を書きます。
      console.log("PHPからのデータ受け取りが失敗しました");
    });
  });
});
