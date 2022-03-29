# phpunit-memory-usage

Report high memory usage PHPUnit tests: Managed by opg-org-infra &amp; Terraform

## Configuration

Add into the phpunit.xml extensions section

```xml
<extensions>
    <extension class="MinistryOfJustice\PHPUnit\MemoryUsageHook"/>
</extensions>
```

There are optional arguments to set the maximum allowed memory threshold and whether to display a running total of usage after each test

```xml
<extensions>
    <extension class="MinistryOfJustice\PHPUnit\MemoryUsageHook">
        <arguments>
            <integer>500000</integer>
            <boolean>true</boolean>
        </arguments>
    </extension>
</extensions>
```
