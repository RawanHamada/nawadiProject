<div>
    <form id="form" class="form" action="{{ route('register') }}" method="POST">
        @csrf

        <div class="age">
            <label for="text">المدينة</label>
            <select name="city_name" class="form-control">
                <option selected>اختر</option>
                <option>الرياض</option>
            </select>
        </div>
        <div class="age">
            <label for="text">الاندية المتاحة</label>
            <select name="club_name" class="form-control">
                <option selected>اختر</option>
                <option>مدارس الصدارة</option>
            </select>
        </div>
        <button type="submit">
            التالي
            </button>
                </form>
</div>
