<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([CountriesTableSeeder::class, RegionsTableSeeder::class, ProvincesTableSeeder::class, CommunesTableSeeder::class, TaxesTableSeeder::class, InvoiceTypesTableSeeder::class, BusinessActivitiesTableSeeder::class]);
        $this->call(CurrenciesTableSeeder::class);
        $this->call(UnitsTableSeeder::class);
        $this->call([CompaniesTableSeeder::class, BranchesTableSeeder::class, BranchCompaniesTableSeeder::class, RolesTableSeeder::class, PermissionsTableSeeder::class, RoleHasPermissionsTableSeeder::class, UsersTableSeeder::class, ModelHasRolesTableSeeder::class, CompanyUsersTableSeeder::class, BranchUsersTableSeeder::class]);
        $this->call([AttributeModulesTableSeeder::class, AttributeFamiliesTableSeeder::class, AttributeFieldsTableSeeder::class, AttributesTableSeeder::class, AttributeGroupsTableSeeder::class, AttributeGroupMappingTableSeeder::class]);
        $this->call([CustomerSegmentsTableSeeder::class, CustomersTableSeeder::class, CustomerAddressesTableSeeder::class]);
        $this->call(BankAccountTypesTableSeeder::class);
        $this->call(ContactTypesTableSeeder::class);
        $this->call(BanksTableSeeder::class);
        $this->call(PaymentMethodsTableSeeder::class);
        $this->call(ShippingMethodsTableSeeder::class);
        $this->call(SellerCategoriesTableSeeder::class);
    }
}
