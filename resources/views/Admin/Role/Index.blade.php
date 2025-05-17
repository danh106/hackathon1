@* @{
    Layout = "~/Areas/Admin/Views/Shared/_Layout.cshtml";
}
@model IEnumerable<DO_AN_WEB_THUE_SACH.Database.tblRole>
<h3>Quản lý Phân quyền</h3>
<div class="d-sm-flex flex-row d-block align-items-center">
    <form action="" method="get" class="d-flex flex-row align-items-center">
        <input name="search" type="text" class="form-control border-dark me-2" style="width: 250px;"
            id="exampleFormControlInput1" placeholder="name@example.com">
        <button class="btn btn-primary" type="submit"><i class="fa-solid fa-search"></i></button>
        <a href="/Admin" class="btn btn-primary ms-2"><i class="fa-solid fa-rotate-right"></i></a>
    </form>
    <a href="/Admin/tacgia/add" class="btn btn-success mx-0 my-2 ms-sm-auto text-nowrap"><i class="fa-solid fa-plus me-2"></i>Thêm</a>
</div>
<div class="table-responsive">
    <table class="table table-striped" style="width: 100%;">
        <thead class="border-bottom-2 border-dark">
            <tr>
                <th scope="col">Mã phân quyền</th>
                <th scope="col">Tên phân quyền</th>
                <th scope="col">Mô tả phân quyền</th>
                <th scope="col">Chức năng</th>
            </tr>
        </thead>
        <tbody>
            @foreach (var item in Model)
            {
                <tr>
                    <th class="align-middle" style="min-width: 120px;" scope="row">@item.RoleID</th>
                    <td class="align-middle" style="min-width: 120px;">@item.Name</td>
                    <td class="align-middle" style="min-width: 120px;">@item.Description</td>
                    <td class="align-middle text-nowrap text-end">
                        <a href="" class="btn btn-primary mx-1 px-2 py-1"><i class="fa-regular fa-edit fs-6"></i></a>
                        <a href="/Admin/phanquyen/Delete/@item.RoleID" class="btn btn-danger mx-1 px-2 py-1"><i
                                class="fa-regular fa-trash-can fs-6"></i></a>
                    </td>
                </tr>
            }
        </tbody>
    </table>
</div> *@