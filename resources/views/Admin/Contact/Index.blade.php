@{
    Layout = "~/Areas/Admin/Views/Shared/_Layout.cshtml";
}
@model List<DO_AN_WEB_THUE_SACH.Database.TblContact>
<h3>Quản lý liên hệ</h3>
<div class="d-sm-flex flex-row d-block align-items-center">
    <form action="" method="get" class="d-flex flex-row align-items-center">
        <input name="search" type="text" class="form-control border-dark me-2" style="width: 250px;"
            id="exampleFormControlInput1" placeholder="name@example.com">
        <button class="btn btn-primary" type="submit"><i class="fa-solid fa-search"></i></button>
        <a href="/Admin/Contact" class="btn btn-primary ms-2"><i class="fa-solid fa-rotate-right"></i></a>
    </form>
</div>
<div class="table-responsive">
    <table class="table table-striped" style="width: 100%;">
        <thead class="border-bottom-2 border-dark">
            <tr>
                <th scope="col">Mã liên hệ</th>
                <th scope="col">Người liên hệ</th>
                <th scope="col">Số điện thoại</th>
                <th scope="col">Email</th>
                <th scope="col">Ngày liên hệ</th>
                <th scope="col">Trạng thái</th>
                <th scope="col">Chức năng</th>
            </tr>
        </thead>
        <tbody>
            @foreach (var item in Model)
            {
                <tr>
                    <th class="align-middle" style="min-width: 120px;" scope="row">@item.ContactId</th>
                    <td class="align-middle" style="min-width: 120px;">@item.Name</td>
                    <td class="align-middle" style="min-width: 120px;">@item.Phone</td>
                    <td class="align-middle" style="min-width: 120px;">@item.Email</td>
                    <td class="align-middle" style="min-width: 120px;">@item.CreatedDate?.ToString("dd/MM/yyyy")</td>
                    <td class="align-middle" style="min-width: 120px;">
                        @if(item.IsRead==1){
                            <b class="text-success">Đã xem</b>
                        }else{
                            <b class="text-danger">Chưa xem</b>
                        }
                    </td>
                    <td class="align-middle" style="min-width: 170px; width: 110px;">
                        <a href="/Admin/Contact/Detail/@item.ContactId" class="btn btn-primary mx-1 px-2 py-1"><i class="fa-regular fa-edit fs-6"></i></a>
                        <a href="/Admin/Contact/Delete/@item.ContactId" class="btn btn-danger mx-1 px-2 py-1"><i
                                class="fa-regular fa-trash-can fs-6"></i></a>
                    </td>
                </tr>
            }
        </tbody>
    </table>
</div>