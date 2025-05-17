@{
    Layout = "~/Areas/Admin/Views/Shared/_Layout.cshtml";
}
@model DO_AN_WEB_THUE_SACH.Database.TblContact
<div class="d-flex mb-1">
    <a href="/Admin/Contact" class="btn btn-primary me-2"><i class="fa-solid fa-left-long"></i></a>
    <h3 class="m-0">Chi tiết liên hệ</h3>
</div>
<div class="col">
    <div class="py-1">
        <label for="" class="fw-bold">Tên người liên hệ</label>
        <input class="form-control border-primary" type="text" value="@Model.Name" name="Name" id="">
    </div>
    <div class="py-1">
        <label for="" class="fw-bold">Số diện thoại</label>
        <input class="form-control border-primary" type="text" value="@Model.Phone" name="Name" id="">
    </div>
    <div class="py-1">
        <label for="" class="fw-bold">Email</label>
        <input class="form-control border-primary" type="text" value="@Model.Email" name="Name" id="">
    </div>
    <div class="py-1">
        <label for="" class="fw-bold">Ngày liên hệ</label>
        <input class="form-control border-primary" type="text" value="@Model.CreatedDate?.ToString("dd/MM/yyyy")" name="Name" id="">
    </div>
    <div class="py-1">
        <label for="" class="fw-bold">Nội dung liên hệ</label>
        <textarea class="form-control border-primary" >@Html.Raw(Model.Message)</textarea>
    </div>
</div>