---
description: Protect your download links by preventing downloads from other domains.
---

# Hotlinking

Hotlinking (also known as leeching) is when another website links directly to your downloadable content. For a variety of reasons, you probably don't want your content to be downloadable from other websites.

:::warning Prevented by default since v3.1
Once hotlink prevention was introduced in v3.1, prevention became the default behavior.
:::

## Allowing Hotlinks

Hotlinking from other websites is **forbidden by default.** When necessary, there are two ways to configure hotlinking:

### Option 1 - Configure availability per each link

For maximum control, configure the availability of individual links when [creating each token](/creating-a-token/#createtoken-asset-options).

Use the `allowHotlinks` option to configure exactly how hotlinks should be allowed.

### Option 2 - Configure availability globally via plugin's Settings

For global control, edit the plugin's Settings page. Set the "Allow Hotlinks" field to manage the availability of all links in the system.

<img width="520" :src="$withBase('/images/allow-hotlinks.png')" class="dropshadow" alt="">

If the option to "only hotlink from specified sites" is selected, you'll then be prompted to specify a whitelist of friendly domains.

<img width="520" :src="$withBase('/images/hotlink-domain-whitelist.png')" class="dropshadow" alt="">
